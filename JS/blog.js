const params = new URLSearchParams(window.location.search);

const produto = params.get("produto");

const imagem = document.getElementById("imagem-produto");

const nome = document.getElementById("nome-produto");

const preco = document.getElementById("preco-produto");

if(produto == "cara_banner"){

    imagem.src = "./IMG/cara_banner.avif";

    nome.innerHTML = "Rapunzel";

    preco.innerHTML = "R$ 70,00";
}

else if(produto == "caraTocandoViolao"){

    imagem.src = "./IMG/caraTocandoViolao_banner.jpg";

    nome.innerHTML = "10 práticas úteis na hora de aprender a tocar um instrumento";

    preco.innerHTML = `
        <h4>Práticas úteis</h4>
        <ul>
            <li>Pratique diariamente, mesmo que por 15 a 30 minutos.</li>
            <li>Faça um aquecimento antes de começar a tocar.</li>
            <li>Utilize um metrônomo para desenvolver o ritmo.</li>
            <li>Aprenda as técnicas básicas antes de músicas difíceis.</li>
            <li>Toque lentamente e aumente a velocidade aos poucos.</li>
            <li>Mantenha uma postura correta durante a prática.</li>
            <li>Ouça músicos experientes para desenvolver a percepção musical.</li>
            <li>Repita trechos difíceis até executá-los com segurança.</li>
            <li>Grave suas práticas para identificar pontos de melhoria.</li>
            <li>Tenha paciência e seja consistente durante o aprendizado.</li>
        </ul>
    `;
}



