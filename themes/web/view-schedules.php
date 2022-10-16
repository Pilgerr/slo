<?php $this->layout("_theme")?>

<body>
    <main>
        <?php
            foreach ($schedules as $schedule){
        ?>
        <div>
            <hr>
            <h6>
            -> ID do dentista: <?=$schedule->idDentist?>
            - ID do paciente: <?=$schedule->idPatient?>
            - Data e hora: <?=$schedule->date?> | <?=$schedule->hour?>
            - Observações: <?=$schedule->comments?>
            </h6>
            <hr>
        </div>
        <?php
            }
        ?>
    </main>
</body>