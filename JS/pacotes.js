document.addEventListener("DOMContentLoaded", () => {
    const carrossel = document.querySelector(".pacotes-carrossel");
    const lista = document.querySelector(".pacotes-lista");
    const cards = [...document.querySelectorAll(".pacote-card")];

    if (!carrossel || !lista || cards.length === 0) {
        return;
    }

    let indiceAtual = 1;
    let arrastando = false;
    let inicioX = 0;
    let deslocamentoX = 0;
    let bloqueado = false;

    function normalizarIndice(indice) {
        return (indice + cards.length) % cards.length;
    }

    function atualizarCards() {
        cards.forEach((card, indice) => {
            card.classList.remove(
                "anterior",
                "ativo",
                "proximo",
                "oculto-esquerda",
                "oculto-direita"
            );

            const anterior = normalizarIndice(indiceAtual - 1);
            const proximo = normalizarIndice(indiceAtual + 1);

            if (indice === indiceAtual) {
                card.classList.add("ativo");
            } else if (indice === anterior) {
                card.classList.add("anterior");
            } else if (indice === proximo) {
                card.classList.add("proximo");
            } else {
                const distancia =
                    normalizarIndice(indice - indiceAtual);

                if (distancia < cards.length / 2) {
                    card.classList.add("oculto-direita");
                } else {
                    card.classList.add("oculto-esquerda");
                }
            }
        });
    }

    function mudarPacote(direcao) {
        if (bloqueado) {
            return;
        }

        bloqueado = true;

        indiceAtual = normalizarIndice(
            indiceAtual + direcao
        );

        atualizarCards();

        window.setTimeout(() => {
            bloqueado = false;
        }, 500);
    }

    function iniciarArraste(event) {
        if (bloqueado) {
            return;
        }

        if (
            event.target.closest(".botao-inscricao")
        ) {
            return;
        }

        arrastando = true;
        inicioX = event.clientX;
        deslocamentoX = 0;

        carrossel.classList.add("arrastando");
        carrossel.setPointerCapture(event.pointerId);
    }

    function moverArraste(event) {
        if (!arrastando) {
            return;
        }

        deslocamentoX = event.clientX - inicioX;

        const limite = 130;
        const movimento = Math.max(
            -limite,
            Math.min(limite, deslocamentoX)
        );

        const cardAtivo =
            cards[indiceAtual];

        const cardAnterior =
            cards[normalizarIndice(indiceAtual - 1)];

        const cardProximo =
            cards[normalizarIndice(indiceAtual + 1)];

        cardAtivo.style.transform = `
            translate(
                calc(-50% + ${movimento}px),
                -50%
            )
            scale(${1.08 - Math.abs(movimento) / 900})
        `;

        cardAnterior.style.transform = `
            translate(
                calc(-50% - 360px + ${movimento}px),
                -50%
            )
            scale(${0.78 + Math.max(movimento, 0) / 600})
        `;

        cardProximo.style.transform = `
            translate(
                calc(-50% + 360px + ${movimento}px),
                -50%
            )
            scale(${0.78 + Math.max(-movimento, 0) / 600})
        `;
    }

    function limparEstilosTemporarios() {
        cards.forEach(card => {
            card.style.transform = "";
        });
    }

    function finalizarArraste(event) {
        if (!arrastando) {
            return;
        }

        arrastando = false;
        carrossel.classList.remove("arrastando");

        limparEstilosTemporarios();

        if (
            event.pointerId !== undefined &&
            carrossel.hasPointerCapture(event.pointerId)
        ) {
            carrossel.releasePointerCapture(event.pointerId);
        }

        if (deslocamentoX < -70) {
            mudarPacote(1);
        } else if (deslocamentoX > 70) {
            mudarPacote(-1);
        } else {
            atualizarCards();
        }

        deslocamentoX = 0;
    }

    cards.forEach((card, indice) => {
        card.addEventListener("click", event => {
            if (
                event.target.closest(".botao-inscricao") ||
                Math.abs(deslocamentoX) > 5
            ) {
                return;
            }

            const anterior =
                normalizarIndice(indiceAtual - 1);

            const proximo =
                normalizarIndice(indiceAtual + 1);

            if (indice === anterior) {
                mudarPacote(-1);
            } else if (indice === proximo) {
                mudarPacote(1);
            }
        });
    });

    carrossel.addEventListener(
        "pointerdown",
        iniciarArraste
    );

    carrossel.addEventListener(
        "pointermove",
        moverArraste
    );

    carrossel.addEventListener(
        "pointerup",
        finalizarArraste
    );

    carrossel.addEventListener(
        "pointercancel",
        finalizarArraste
    );

    carrossel.addEventListener(
        "lostpointercapture",
        event => {
            if (arrastando) {
                finalizarArraste(event);
            }
        }
    );

    atualizarCards();
});