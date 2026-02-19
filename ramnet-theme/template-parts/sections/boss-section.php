<?php
// Получаем ID главной страницы
$front_page_id = get_option('page_on_front');

// Получаем значения из произвольных полей (если используете ACF)
$boss_name = get_field('boss_name', $front_page_id) ?: 'Павел Бахаев – основатель компании РАМ.НЕТ';
$boss_text_1 = get_field('boss_text_1', $front_page_id) ?: 'Производственная компания РАМ.НЕТ специализируется на установке систем панорамного остекления под ключ: от проекта до изготовления и монтажа конструкций различного типа и конфигурации. Можем изготовить все, что связано с закаленным стеклом. Монтаж также производят специалисты, которые знают особенности этого материала.';
$boss_text_2 = get_field('boss_text_2', $front_page_id) ?: 'Свое дело мы с любовью развиваем уже более 15 лет. Нас знают как надежного и ответственного подрядчика не только в Воронеже, но и в регионах России: от Москвы до Сочи.';
$boss_text_3 = get_field('boss_text_3', $front_page_id) ?: 'Сейчас в штате компании трудится 10 человек. Личный опыт работы каждого сотрудника от 5 лет.';
?>

<section class="boss" id="boss">
    <div class="boss__container">
        <h4 class="title__boss"><?php _e('О компании', 'ramnet'); ?></h4>
        
        <div class="boss__lines">
            <img src="<?php echo RAMNET_THEME_URI . '/assets/images/boss.png'; ?>" alt="">
            
            <div class="boss__card">
                <h1 class="boss__title"><?php echo esc_html($boss_name); ?></h1>
                
                <div class="boss__text__flex">
                    <p class="boss__text"><?php echo esc_html($boss_text_1); ?></p>
                    <p class="boss__text"><?php echo esc_html($boss_text_2); ?></p>
                    <p class="boss__text"><?php echo esc_html($boss_text_3); ?></p>
                </div>
            </div>
        </div>
    </div>
</section>