<!doctmpe html>
<html lang="fr">
<head>
    <?php
    include 'head.php';
    ?>
</head>
<body>
<header>
    <?php
    include 'header.php';
    ?>
</header>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="titreVote">Mes votes</h2>
                <p class="pVote">Le dernier mois</p>
                <p class="pVote2">Mes votes ont été:</p>
                <div id="line-example"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <p class="pVote">Le derniers mois</p>
                <p class="pVote2">J'ai été dans les magasins:</p>
                <div id="donut-example1"></div>
            </div>
        </div>
    </div>
</section>

<footer></footer>
<script>
    Morris.Line({
        element: 'line-example',
        data: [
            { y: '2006', a: 100, b: 90 },
            { y: '2007', a: 75,  b: 65 },
            { y: '2008', a: 50,  b: 40 },
            { y: '2009', a: 75,  b: 65 },
            { y: '2010', a: 50,  b: 40 },
            { y: '2011', a: 75,  b: 65 },
            { y: '2012', a: 100, b: 90 },
            { y: '2012', a: 100, b: 90 },

        ],
        xkey: 'y',
        ykeys: ['a', 'b'],
        labels: ['Series A', 'Series B']
    });
</script>
<script>
    Morris.Donut({
        element: 'donut-example1',
        data: [
            {label: "Darty", value: 2},
            {label: "Castorama", value: 1},
            {label: "Boulanger Michaud", value: 4}
        ]
    });
</script>
</body>
</html>