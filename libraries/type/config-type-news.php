<?php
    /* Dịch vụ */
    $nametype = "dich-vu";
    $config['news'][$nametype]['title_main'] = "Dịch vụ";
    $config['news'][$nametype]['list'] = true;
    $config['news'][$nametype]['dropdown'] = true;

    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 425;
    $config['news'][$nametype]['height'] = 270;
    $config['news'][$nametype]['thumb'] = '425x270x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Dịch vụ (List) */
    $config['news'][$nametype]['title_main_list'] = "Dịch vụ cấp 1";
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");


    /* bảng giá */
    $nametype = "bang-gia";
    $config['news'][$nametype]['title_main'] = "Bảng giá";
    $config['news'][$nametype]['list'] = true;
    $config['news'][$nametype]['dropdown'] = true;
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 390;
    $config['news'][$nametype]['height'] = 390;
    $config['news'][$nametype]['thumb'] = '390x390x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';
    $config['news'][$nametype]['title_main_list'] = "Bảng giá cấp 1";
    $config['news'][$nametype]['slug_list'] = true;
    $config['news'][$nametype]['check_list'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    
    /* Tin tức */
    $nametype = "tin-tuc";
    $config['news'][$nametype]['title_main'] = "Tin tức";
    $config['news'][$nametype]['view'] = true;
    $config['news'][$nametype]['copy'] = true;
    $config['news'][$nametype]['copy_image'] = true;
    $config['news'][$nametype]['slug'] = true;
    $config['news'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['news'][$nametype]['images'] = true;
    $config['news'][$nametype]['show_images'] = true;
    $config['news'][$nametype]['desc'] = true;
    $config['news'][$nametype]['schema'] = true;
    $config['news'][$nametype]['content'] = true;
    $config['news'][$nametype]['content_cke'] = true;
    $config['news'][$nametype]['seo'] = true;
    $config['news'][$nametype]['width'] = 425;
    $config['news'][$nametype]['height'] = 270;
    $config['news'][$nametype]['thumb'] = '425x270x1';
    $config['news'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    
    /* Chính sách có thì giữ, không thì xóa*/
    // $nametype = "chinh-sach";
    // $config['news'][$nametype]['title_main'] = "Chính sách";
    // $config['news'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    // $config['news'][$nametype]['view'] = true;
    // $config['news'][$nametype]['slug'] = true;
    // $config['news'][$nametype]['copy'] = true;
    // $config['news'][$nametype]['content'] = true;
    // $config['news'][$nametype]['content_cke'] = true;
    // $config['news'][$nametype]['seo'] = true;
    // $config['news'][$nametype]['schema'] = true;

    /* -------------- */

    /* Quản lý mục (Không cấp) */
    if (isset($config['news'])) {
        foreach ($config['news'] as $key => $value) {
            if (!isset($value['dropdown']) || (isset($value['dropdown']) && $value['dropdown'] == false)) {
                $config['shownews'] = 1;
                break;
            }
        }
    }
?>