<?php 
session_start();

	include("config.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/main.css">
    <title>Hufflepuff</title>
</head>

<body>

    <div class="about-section">
        <h1 class="hero0">Those patient Hufflepuffs are true and unafraid of toil!</h1>
        <h1 class="hero">Hufflepuff</h1>
        <picture class="pic">
            <svg xmlns="http://www.w3.org/2000/svg" width="265" height="26" viewBox="0 0 265 26">
                <defs>
                    <linearGradient id="a" x1="20.846%" x2="83.437%" y1="-2.088%" y2="99.195%">
                        <stop offset="0%" stop-color="#E7DA9A" />
                        <stop offset="51.106%" stop-color="#CDB373" />
                        <stop offset="100%" stop-color="#996E2D" />
                    </linearGradient>
                </defs>
                <g fill="none" fill-rule="evenodd">
                    <path fill="url(#a)" fill-rule="nonzero"
                        d="M1.822 0c0 6.135 4.816 11.164 10.932 11.628V.896h1.821V11.63c6.13-.452 10.96-5.487 10.96-11.63h1.823c0 6.227-4.303 11.467-10.143 13 5.84 1.533 10.143 6.773 10.143 13h-1.822c0-6.143-4.832-11.178-10.96-11.63v10.732h-1.823v-10.73C6.639 14.836 1.823 19.865 1.823 26H0c0-6.228 4.302-11.467 10.142-13C4.302 11.466 0 6.227 0 0h1.822z"
                        transform="translate(119.505)" />
                    <g fill="#D9B062" opacity=".3">
                        <path d="M164.645 13.684H264.5v1.369h-99.855zM.5 13.684h99.855v1.369H.5z" />
                    </g>
                </g>
            </svg>
        </picture>
        <div class="imgg">
            <picture class="image">
                <img src="https://www.wizardingworld.com/_next/image?url=https%3A%2F%2F%2F%2Fimages.ctfassets.net%2Fusf1vwtuqyxm%2F4osKNxztknHP1KoQbVDAoS%2F768390db4a6cddc624f0afb4c82f8641%2FHufflepuff_House_Pride_Collection_Symbol.svg&w=375&q=75"
                    alt="" class="image2">
            </picture>
        </div>

        <p class="txt1">The Hufflepuff common room is entered from the same corridor as the Hogwarts kitchens. Proceeding past the large still life that forms the entrance to the latter, a pile of large barrels is to be found stacked in a shadowy stone recess on the right-hand side of the corridor. The barrel two from the bottom, middle of the second row, will open if tapped in the rhythm of ‘Helga Hufflepuff’. As a security device to repel non-Hufflepuffs, tapping on the wrong barrel, or tapping the incorrect number of times, results in one of the other lids bursting off and drenching the interloper in vinegar.

A sloping, earthy passage inside the barrel travels upwards a little way until a cosy, round, low-ceilinged room is revealed, reminiscent of a badger’s sett. The room is decorated in the cheerful, bee-like colours of yellow and black, emphasised by the use of highly polished, honey-coloured wood for the tables and the round doors which lead to the boys’ and girls’ dormitories (furnished with comfortable wooden bedsteads, all covered in patchwork quilts).
        </p>

        <svg class="svg2">
            <defs>
                <linearGradient id="gradient-gold">
                    <stop offset="5%" stop-color="#D0BD85"></stop>
                    <stop offset="95%" stop-color="#AF995F"></stop>
                </linearGradient>
            </defs>
            <path fill="#000"
                d="M48.9477459,42 L36,28.9546237 C38.3688525,19.8870754 48.789959,6.04572047 56.9989754,0 L61.5778689,3.3418711 C50.3688525,12.5684086 52.2622951,21.7959786 63,27.8406666 L48.9477459,42 Z M12.9472126,42 L0,28.9546237 C2.36894236,19.8870754 12.7894198,6.04572047 20.9997723,0 L25.5788395,3.3418711 C14.3683731,12.5684086 16.2629122,21.7959786 27,27.8406666 L12.9472126,42 Z">
            </path>
        </svg>

        <div class="qoute">
            "            Forgive and forget, I say, we ought to give peeves a second chance."
        </div>
        <div class="qoute-foot">
            - The Fat Frier
        </div>
	<div>
        <br>
        <a href="logout.php" class="logout">logout</a>
        </div>
    </div>

</body>

</html>
