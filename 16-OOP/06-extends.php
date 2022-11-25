<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Extends</title>
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
            Extends
        </h1>
        
        <section class="text-black
                        bg-white
                        min-h-[400px]
                        p-5
                        rounded-xl 
                        opacity-60">


            <?php

                class Operation {
                    protected $number1;
                    protected $number2;

                    public function __construct($number1, $number2) {
                        $this->number1 = $number1;
                        $this->number2 = $number2;
                    
                    }

                }

                class Addition extends Operation {
                    public function showResult() {
                        return '<p class="p-4 rounded ring-1 ring-black/25 mb-4"> 
                                    <b>The product is: </b>'.($this->number1 + $this->number2).' 
                                </p>';
                    }
                }

                class Subtration extends Operation {
                    public function showResult() {
                        return '<p class="p-4 rounded ring-1 ring-black/25 mb-4"> 
                                    <b>The product is: </b>'.($this->number1 - $this->number2).' 
                                </p>';
                    }
                }

                class Product extends Operation {
                    public function showResult() {
                        return '<p class="p-4 rounded ring-1 ring-black/25 mb-4"> 
                                    <b>The product is: </b>'.($this->number1 * $this->number2).' 
                                </p>';
                    }
                }

                class Division extends Operation {
                    public function showResult() {
                        return '<p class="p-4 rounded ring-1 ring-black/25 mb-4"> 
                                    <b>The division is: </b>'.($this->number1 / $this->number2).' 
                                </p>';
                    }
                }

                class Pow extends Operation {
                    public function showResult() {
                        return '<p class="p-4 rounded ring-1 ring-black/25 mb-4"> 
                                    <b>The Exponetation is: </b>'.($this->number1 ** $this->number2).' 
                                </p>';
                    }
                }

                $oper = new Addition(64, 256);
                echo $oper->showResult();

                $oper = new Subtration(512, 74);
                echo $oper->showResult();

                $oper = new Product(12, 9);
                echo $oper->showResult();

                $oper = new Division(1024, 32);
                echo $oper->showResult();

                $oper = new Pow(4, 4);
                echo $oper->showResult();

            ?>
        </section>
    </main>
    
</body>
</html>