<?php
    $data = getData();
    $items = $data['points'];
?>

<div class="hero_testlektion">
    <div class="container">
        <h1><?php echo $data['title'] ?></h1>
        <div class="desc">
            <?php echo $data['desc_1'] ?>
        </div>
        
        <?php if(!empty($items)): ?>
            <div class="points">

                <?php foreach($items as $item): ?>

                    <div class="point">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.5007 12.9874C17.0007 15.4874 15.1157 17.8414 12.4707 18.3674C11.1807 18.6243 9.84252 18.4676 8.64672 17.9197C7.45091 17.3719 6.45843 16.4607 5.81061 15.3159C5.16278 14.1712 4.89263 12.8512 5.03862 11.544C5.18461 10.2368 5.7393 9.00898 6.62371 8.03535C8.43771 6.03735 11.5007 5.48735 14.0007 6.48735" stroke="#D9881C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M9.00073 11.9873L11.5007 14.4873L17.5007 7.9873" stroke="#D9881C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <?php echo $item['point'] ?>
                    </div>
                    
                <?php endforeach ?>

            </div>
        <?php endif ?>
    </div>
</div>