document.addEventListener("DOMContentLoaded", () => {
    iniciarCarrosselPacotes();
    iniciarHistoriasSimples();
});

/* =========================================
   FUNÇÕES AUXILIARES
========================================= */

function criarControlesAutomaticos({
    carrossel,
    classeControles,
    classeBotao,
    classeIndicadores,
    textoAnterior,
    textoProximo
}) {
    let controles = document.querySelector(`.${classeControles}`);

    if (!controles) {
        controles = document.createElement("div");
        controles.className = classeControles;

        carrossel.insertAdjacentElement("afterend", controles);
    }

    let botaoAnterior = controles.querySelector(
        `.${classeBotao}.anterior`
    );

    let indicadores = controles.querySelector(
        `.${classeIndicadores}`
    );

    let botaoProximo = controles.querySelector(
        `.${classeBotao}.proximo`
    );

    if (!botaoAnterior) {
        botaoAnterior = document.createElement("button");

        botaoAnterior.type = "button";
        botaoAnterior.className = `${classeBotao} anterior`;
        botaoAnterior.innerHTML = "&#10094;";
        botaoAnterior.setAttribute("aria-label", textoAnterior);

        controles.appendChild(botaoAnterior);
    }

    if (!indicadores) {
        indicadores = document.createElement("div");
        indicadores.className = classeIndicadores;

        controles.appendChild(indicadores);
    }

    if (!botaoProximo) {
        botaoProximo = document.createElement("button");

        botaoProximo.type = "button";
        botaoProximo.className = `${classeBotao} proximo`;
        botaoProximo.innerHTML = "&#10095;";
        botaoProximo.setAttribute("aria-label", textoProximo);

        controles.appendChild(botaoProximo);
    }

    return {
        controles,
        botaoAnterior,
        botaoProximo,
        indicadores
    };
}

function lerVariavelNumerica(elemento, nome, valorPadrao) {
    const estilos = window.getComputedStyle(elemento);

    const valor = Number.parseFloat(
        estilos.getPropertyValue(nome)
    );

    return Number.isFinite(valor) ? valor : valorPadrao;
}

function removerTransformacoesTemporarias(cards) {
    cards.forEach(card => {
        card.style.transform = "";
        card.style.opacity = "";
        card.style.filter = "";
    });
}

/* =========================================
   CARROSSEL DE PACOTES
========================================= */

function iniciarHistoriasSimples() {
    const lista = document.querySelector(".historias-lista");

    const cards = [
        ...document.querySelectorAll(".historia-card")
    ];

    const botaoAnterior = document.querySelector(
        ".botao-historias.anterior"
    );

    const botaoProximo = document.querySelector(
        ".botao-historias.proximo"
    );

    const indicadores = [
        ...document.querySelectorAll(
            ".historias-indicadores .indicador"
        )
    ];

    if (
        !lista ||
        cards.length === 0 ||
        !botaoAnterior ||
        !botaoProximo
    ) {
        return;
    }

    let indiceAtual = 0;

    function limitarIndice(indice) {
        if (indice < 0) {
            return cards.length - 1;
        }

        if (indice >= cards.length) {
            return 0;
        }

        return indice;
    }

    function atualizarIndicadores() {
        indicadores.forEach((indicador, indice) => {
            indicador.classList.toggle(
                "ativo",
                indice === indiceAtual
            );
        });
    }

    function mostrarCard(indice) {
        indiceAtual = limitarIndice(indice);

        cards[indiceAtual].scrollIntoView({
            behavior: "smooth",
            block: "nearest",
            inline: "center"
        });

        atualizarIndicadores();
    }

    botaoAnterior.addEventListener("click", () => {
        mostrarCard(indiceAtual - 1);
    });

    botaoProximo.addEventListener("click", () => {
        mostrarCard(indiceAtual + 1);
    });

    indicadores.forEach((indicador, indice) => {
        indicador.addEventListener("click", () => {
            mostrarCard(indice);
        });
    });

    let temporizadorScroll;

    lista.addEventListener("scroll", () => {
        window.clearTimeout(temporizadorScroll);

        temporizadorScroll = window.setTimeout(() => {
            const centroLista =
                lista.scrollLeft + lista.clientWidth / 2;

            let menorDistancia = Infinity;
            let novoIndice = 0;

            cards.forEach((card, indice) => {
                const centroCard =
                    card.offsetLeft + card.offsetWidth / 2;

                const distancia = Math.abs(
                    centroLista - centroCard
                );

                if (distancia < menorDistancia) {
                    menorDistancia = distancia;
                    novoIndice = indice;
                }
            });

            indiceAtual = novoIndice;
            atualizarIndicadores();
        }, 80);
    });

    atualizarIndicadores();
}