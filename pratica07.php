<pre>
    <?php

        $produto1 = [
            'nome' => 'tenis',
            'preco' => '1.230,00',
            'descricao' => 'Tenis esportivo, Tênis Nike Revolution 6 Next<br> Nature Masculino - Preto+Branco',
            'imagem' => "<img  width='100' src='img/tenis-nike.png'>"
        ];

        $produto2 = [
            'nome' => 'camiseta',
            'preco' => '90,00',
            'descricao' => 'Camisa Flamengo I 22/23 s/n° Torcedor <br> Adidas Masculina - Vermelho+Preto',
            'imagem' => "<img  width='100' src='img/flamengo.png'>"
        ];
        $produto3 = [
            'nome' => 'celular',
            'preco' => '2.230,00',
            'descricao' => 'Smartphone Motorola Moto E20 32GB 4G Wi-Fi Tela 6.5 <br> Dual Chip 2GB RAM Câmera Dupla + Selfie 5MP - Cinza',
            'imagem' => "<img  width='100' src='img/celular.png'>"
        ];
        $produto4 = [
            'nome' => 'notebook',
            'preco' => '4.450,00',
            'descricao' => 'Notebook Acer Aspire 5 Intel Core i5-10210U 8GB 256GB SSD <br>W11 15,6” FHD IPS Prata A515-54-57CS',
            'imagem' => "<img  width='100' src='img/notebook.png'>"
        ];
        $produto5 = [
            'nome' => 'Bicicleta',
            'preco' => '1.450,00',
            'descricao' => 'Bicicleta 29 Aluminum Câmbios 24 Marchas Index Freio a Disco <br>Mecânico 160mm e Suspensão Dianteira 80mm Aro 29',
            'imagem' => "<img  width='100' src='img/bicicleta.png'>"
        ];

        $produtos = [
            $produto1,
            $produto2,
            $produto3,
            $produto4,
            $produto5
        ];

        // var_dump($produtos);
    ?>
</pre>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <caption>LISTA DE PRODUTOS</caption>
    <table class="table table-hover table-striped mt-5">
        
        <thead class="table-dark">
            <tr class="text-center">
                <th class="text-center">NOME</th>
                <th class="text-center">PREÇO</th>
                <th class="text-center">DESCRIÇÃO</th>
                <th class="text-center">IMAGEM</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($produtos as $produto){?>
                    <tr  class="text-center">
                        <td><?= $produto['nome'];?></td>
                        <td><?= $produto['preco'];?></td>
                        <td><?= $produto['descricao'];?></td>
                        <td><?= $produto['imagem'];?></td>
                    </tr>
            <?php }
            ?>
        </tbody>
    </table>
</div>

