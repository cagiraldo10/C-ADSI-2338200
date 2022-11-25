<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Private (Attributes/Methods)</title>
    <script src="public/js/tailwind-3.2.1.js"></script>
</head>
<body class="bg-gradient-to-t
            from-stone-900
            to-stone-500
            min-h-screen">


    <main class="m-10
                mx-auto
                max-w-lg
                p-5 
                border-4
                border-white-600 
                bg-white/5 
                rounded-xl">
        <h1 class=" m-5 
                    text-center
                    text-2xl
                    text-white
                    text-opacity-80
                    font-bold">
        <a href="index.php" class="float-left 
                                    transition
                                    hover:text-white
                                    hover:-translate-x-1">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15M12 9l-3 3m0 0l3 3m-3-3h12.75" />
            </svg>
        </a>
            Private (Attributes/Methods)
        </h1>
        
        <section class="text-black
                        bg-white
                        min-h-[400px]
                        p-5
                        rounded-xl 
                        opacity-60">

        <form action="" method="POST" class="m-4 
                                            flex 
                                            flex-col 
                                            justify-center 
                                            items-start 
                                            ring-1 
                                            ring-black/25 
                                            rounded 
                                            p-3 
                                            gap-4">
            <h3 class="text-2xl font-bold mx-auto my-2">Table Maker</h3>

            <label for="num_rows" class="flex 
                                        justify-between 
                                        w-[220px]">
                <strong>Number of Rows:</strong>
                <input class="p-1 rounded bg-black text-white w-16" type="number" id="num_rows" name="num_rows" min="1" max="40" required>
            </label>
            <label for="num_cols" class="flex 
                                        justify-between 
                                        w-[220px]">
                <strong>Number of Cols:</strong>
                <input class="p-1 rounded bg-black text-white w-16" type="number" id="num_cols" name="num_cols" min="1" max="10" required>
            </label>
            <button class="bg-black/80 rounded text-white py-2 px-4">Render Table</button>
        </form>
        <?php

            class RenderTable {
                private $nr;
                private $nc;

                public function __construct($nr, $nc) {
                    $this->nr = $nr;
                    $this->nc = $nc;

                    $this->renderTableHeader();
                    $this->renderTableBody();
                    $this->renderTableFooter();
                }
                private function renderTableHeader() {
                    echo '<table class="border-collapse my-4">';
                }
                private function renderTableBody() {
                    for ($i = 1; $i <= $this->nr ; $i++) { 
                        echo '<tr>';
                            for ($j = 1; $j <= $this->nc ; $j++) { 
                                echo '<td class="p-1 ring-1 ring-black/25">R'.$i.' C '.$j.'</td>';
                            }
                        echo '</tr>';
                    }
                }
                private function renderTableFooter() {
                    echo '</table>';
                }
            }
            if ($_POST) {
                $nr = $_POST['num_rows'];
                $nc = $_POST['num_cols'];


                $rt = new RenderTable($nr, $nc);
            }

        ?>


        </section>
    </main>
    
</body>
</html>