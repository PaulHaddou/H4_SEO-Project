<?php
    $path_Files_Head = "../../";
    $Navbar_Link_Home_href  = "../../";
    $Navbar_Link_1_href  = "#";
    $Navbar_Link_2_href  = "#";
    $css = "styles/shop/shop.min.css";
    include '../../includes/texts.php';
    include '../../includes/head.php';
    include '../../includes/navbar.php';
?>
    <div class="main">
        <div class="main_content">
            <div class="main_content_card">
                <img src="../../pictures/shop/K-RO_Shop_Image_Petite-Sirene.jpg" alt="Image représentant des carreaux de carrelage Petite Sirene" class="card_img">
                <div class="card_texts">
                    <div class="card_texts_txts">
                        <h1 class="card_texts_txts_title"><?= $Shop_Content_1_Title ?></h1>
                        <p class="card_texts_txts_description"><?= $Shop_Content_1_Description ?></p>
                    </div>
                    <a href="petite-sirene/" class="card_texts_btn">En savoir plus</a>
                </div>
            </div>
            <div class="main_content_card">
                <img src="../../pictures/shop/K-RO_Shop_Image_Cendrillon.jpg" alt="Image représentant des carreaux de carrelage Petite Sirene" class="card_img">
                <div class="card_texts">
                    <div class="card_texts_txts">
                        <h2 class="card_texts_txts_title"><?= $Shop_Content_2_Title ?></h2>
                        <p class="card_texts_txts_description"><?= $Shop_Content_2_Description ?></p>
                    </div>
                    <a href="cendrillon/" class="card_texts_btn">En savoir plus</a>
                </div>
            </div>
            <div class="main_content_card">
                <img src="../../pictures/shop/K-RO_Shop_Image_Belle-et-la-Bete.jpg" alt="Image représentant des carreaux de carrelage Petite Sirene" class="card_img">
                <div class="card_texts">
                    <div class="card_texts_txts">
                        <h2 class="card_texts_txts_title"><?= $Shop_Content_3_Title ?></h2>
                        <p class="card_texts_txts_description"><?= $Shop_Content_3_Description ?></p>
                    </div>
                    <a href="belle-et-la-bete" class="card_texts_btn">En savoir plus</a>
                </div>
            </div>
            <div class="main_content_card">
                <img src="../../pictures/shop/K-RO_Shop_Image_Princesse-et-la-Grenouille.jpg" alt="Image représentant des carreaux de carrelage Petite Sirene" class="card_img">
                <div class="card_texts">
                    <div class="card_texts_txts">
                        <h2 class="card_texts_txts_title"><?= $Shop_Content_4_Title ?></h2>
                        <p class="card_texts_txts_description"><?= $Shop_Content_4_Description ?></p>
                    </div>
                    <a href="princesse-et-la-grenouille/" class="card_texts_btn">En savoir plus</a>
                </div>
            </div>
        </div>
    </div>
<?php
    include '../../includes/footer.php';
?>
