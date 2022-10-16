<?php $this->layout("_theme")?>

<body>
    <main>
        <?php
            foreach ($patients as $patient){
        ?>
        <div>
            <hr>
            <h6>Nome do paciente: <?=$patient->name?> - Telefone: <?=$patient->phoneNumber?> - CPF: <?=$patient->document?></h6>
            <hr>
        </div>
        <?php
            }
        ?>
    </main>
</body>