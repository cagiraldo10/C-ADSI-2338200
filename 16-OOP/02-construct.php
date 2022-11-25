<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method Construct</title>
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
                    text-3xl
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
            Method Construct
        </h1>
        
        <section class="text-black
                        bg-white
                        min-h-[400px]
                        p-5
                        rounded-xl 
                        opacity-60">

            <?php

                class PlayList {
                    // Attributes
                    private $name;
                    private $artist = Array();
                    private $album  = Array();
                    private $image  = Array();
                    private $year   = Array();

                    // Methods
                    public function __construct($name) {
                        $this->name = $name;
                    }

                    public function setPlayList($artist, $album, $image, $year) {
                        $this->artist[] = $artist;
                        $this->album[]  = $album;
                        $this->image[]  = $image;
                        $this->year[]   = $year;
                    }

                    public function getPlayList() {
                        echo '<h3 class="text-center mb-4 text-xl">'.$this->name.'</h3>';
                        for ($i = 0 ; $i < count($this->artist); $i++) {
                            echo '<ul class="mb-8 flex flex-col justify-center rounded ring-1 ring-black/25 p-4">';
                            echo '<li> <strong> Artist: </strong>' .$this->artist[$i]. '</li>';
                            echo '<li> <strong> Album: </strong>' .$this->album[$i]. '</li>';
                            echo '<li> <strong> Year: </strong>' .$this->year[$i]. '</li>';
                            echo '<li> <strong> Image: </strong> <img src="' .$this->image[$i]. '"width="80px"</li>';
                            echo '</ul>';
                        }
                    }
                }
                $pl = new PlayList('Trap');
                $pl->setPlayList('Bad Bunny', 'Ultimo Tour del Mundo', 'https://tinyurl.com/yck2sskb', '2021');
                $pl->setPlayList('Bad Bunny', 'Un Verano Sin Ti', 'https://tinyurl.com/3wrawt9e', '2022');
                $pl->setPlayList('Bad Bunny', 'YHLQMDLG', 'https://tinyurl.com/3uvcbm3x', '2022');
                $pl->getPLayList();

            ?>
            
        </section>
    </main>
    
</body>
</html>