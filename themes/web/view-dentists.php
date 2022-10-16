<?php $this->layout("_theme")?>

<body>
    <main>
        <?php
            foreach ($dentists as $dentist){
        ?>
        <div>
            <hr>
            <h6>Nome do dentista: <?=$dentist->name?> - Email: <?=$dentist->email?> - CRO: <?=$dentist->document?></h6>
            <hr>
        </div>
        <?php
            }
        ?>
    </main>
</body>