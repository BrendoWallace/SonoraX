const params = new URLSearchParams(window.location.search);

const produto = params.get("produto");

const imagem = document.getElementById("imagem-produto");

const nome = document.getElementById("nome-produto");

const preco = document.getElementById("preco-produto");

if(produto == "cara_banner"){

    imagem.src = "./IMG/cara_banner.png";

    nome.innerHTML = "O primeiro grande passo na música";

    preco.innerHTML = "Apesar do tamanho da tuba impressionar, ela representa um grande desafio e uma enorme conquista para quem está começando. Cada ensaio fortalece a disciplina, a respiração e a confiança do aluno, mostrando que dedicação é mais importante do que idade.";
}

else if(produto == "caraTocandoViolao"){

    imagem.src = "./IMG/caraTocandoViolao_banner.png";

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

else if(produto == "menina_violino"){

    imagem.src = "./IMG/meninaTocandoViolino_blog.png";

    nome.innerHTML = "Quando a música une talentos";

    preco.innerHTML = "Estudar violino em grupo ajuda os alunos a desenvolver concentração, trabalho em equipe e respeito pelo tempo dos colegas. Além do aprendizado técnico, as aulas coletivas tornam a experiência mais divertida e motivadora para todos.";
}
else if(produto == "meninas_banner"){

    imagem.src = "./IMG/meninas_banner.png";

    nome.innerHTML = "Aprendendo juntos: o poder da música em grupo";

    preco.innerHTML = "Aprender um instrumento ao lado de outros estudantes torna a evolução mais leve e inspiradora. Cada ensaio representa uma oportunidade de aprender algo novo, compartilhar experiências e criar amizades por meio da música.";
}
else if(produto == "criancas"){

    imagem.src = "./IMG/criancas.png";

    nome.innerHTML = "Cada instrumento, uma nova descoberta";

    preco.innerHTML = "Cada instrumento possui um som, uma técnica e um desafio diferente. Experimentar diversas opções ajuda crianças e iniciantes a descobrirem qual combina mais com sua personalidade e com o estilo musical que desejam aprender.";
}
else if(produto == "kitty"){

    imagem.src = "./IMG/kitty.png";

    nome.innerHTML = "O ritmo que move a música é hello kitty";

    preco.innerHTML = "A bateria é responsável por marcar o tempo e dar energia às músicas. Além de divertida, sua prática desenvolve coordenação motora, independência entre braços e pernas e melhora a percepção rítmica, habilidades importantes para qualquer músico.";
}
else if(produto == "grupo"){

    imagem.src = "./IMG/grupo.png";

    nome.innerHTML = "A música como parte da cultura e da história";

    preco.innerHTML = "Muito antes dos instrumentos modernos, diferentes povos já utilizavam tambores, flautas e cantos para celebrar tradições, contar histórias e fortalecer a união da comunidade. Conhecer essas manifestações é também conhecer a riqueza cultural da música.";
}
else if(produto == "banda_antiga"){

    imagem.src = "./IMG/banda_antiga.png";

    nome.innerHTML = "Como a música evoluiu ao longo do tempo";

    preco.innerHTML = "Ao longo das décadas, os instrumentos, os estilos e as formas de gravar músicas mudaram bastante. Mesmo com toda essa evolução, a paixão por tocar, aprender e compartilhar música continua sendo a mesma, conectando diferentes gerações. Esses títulos e histórias são curtos, ideais para um blog de uma escola de música. Eles introduzem o tema de cada imagem de forma clara e deixam espaço para você complementar com informações, curiosidades ou dicas ao longo da publicação.";
}





