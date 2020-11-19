<?php
    $path_Files_Head = "../../../";
    $Navbar_Link_1_href = "../";
    $Navbar_Link_Home_href  = "../../../";
    $Navbar_Link_2_href  = "#";
    $css = "styles/product/product.min.css";
    include '../../../includes/texts.php';
    include '../../../includes/head.php';
    include '../../../includes/navbar.php';
?>    

<div class="main">
    <div class="left_container">
        <img src="../../../pictures/K-RO_Cendrillon-Motif.png" alt="Image de Carreau de La petite sirene" class="left_container_img">
    </div>
    <div class="right_container">
        <div class="main_content-1_elements">
            <p class="right_container_title_txt"><?= $Product_Main_Title_Cendrillon ?></p>
        </div>
        <div class="main_content-2_elements">   
            <p class="right_container_small_title_txt"><?= $Product_Content_1_Small_Title ?></p>
            <p class="right_container_body_txt"><?= $Product_Content_1_Body_Cendrillon ?></p>
        </div>
        <div class="main_content-3_elements">   
            <p class="right_container_small_title_txt"><?= $Product_Content_2_Small_Title ?></p>
            <p class="right_container_body_txt"><?= $Product_Content_2_Body ?></p>
        </div>
        <div class="main_content-4_elements">  
        <a class="elements_txt-btn_btn_more_txt" href="#">Demander un devis</a>
        </div>
    </div>
</div>

<div class="bottom_container">
    <div class="bottom_container_elements_titles">
        <p class="content-1_elements_titles_small-title"><?= $Bottom_Container_1_Small_Purple_Title ?></p>
        <p class="content-1_elements_titles_big-title"><?= $Bottom_Container_1_Big_Title ?></p>
    </div>
    <div class="bottom_container_img">
        <img src="../../../pictures/K-RO_Belle_et_la_bete-Motif.png" alt="Image de la princesse la belle et la bête">
        <img src="../../../pictures/K-RO_Petite-Sirene-Carreau-Motif-2.png" alt="Image de la princesse Cendrillon">
        <img src="../../../pictures/K-RO_Princesse_Grenouille-Motif.png" alt="Image de la princesse et la grenouille">
    </div>
</div>

<?php
    include '../../../includes/footer.php';
?>    