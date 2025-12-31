<ul class="header__catalog-menu">
    <?php foreach ($categoryWithSubCategories as $category): ?>
    <li class="header__catalog-item" data-category>
        <a href="/<?= htmlspecialchars($category['category_link']) ?>" class="header__catalog-link" <?php if(!empty($category['subcategories'])):?> data-has-children <?php endif; ?> >
            <span class="header__catalog-link-text"><?= htmlspecialchars($category['name'])  ?></span>
            <span class="header__catalog-link-icon">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 4L12 10L8 16" stroke="#1D1D1D" stroke-width="4"/>
                </svg>
            </span>
        </a>
        <div class="header__catalog-dropdown" data-submenu>
            <button class="header__mobile-back" data-close-catalog type="button">
            <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" id="Arrow-Back--Streamline-Outlined-Material" height="16" width="16">
            <g id="arrow-back">
                <path id="Vector" d="m6.85 12.75 6.2 6.2L12 20 4 12 12 4l1.05 1.05 -6.2 6.2H20v1.5H6.85Z" fill="#000000" stroke-width="0.5"></path>
            </g>
            </svg>    
            Назад</button>

        <?php if(!empty($category['subcategories'])) : ?>
            <ul class="header__catalog-menu">

            <?php  
            $subs = $category['subcategories'];
            
            for($i=0; $i<count($subs); $i+=2):
                $link = $subs[$i];
                $subname = $subs[$i+1];
            
        
            ?>
                <li class="header__catalog-item" data-subcategory >
                    <a href="/<?= $category['category_link'] ?>/<?= htmlspecialchars($link) ?>" class="header__catalog-link">
                        <span class="header__catalog-link-text"><?= htmlspecialchars($subname) ?></span>
                    </a>
                </li>
            <?php endfor; ?>
            </ul>

            <?php endif; ?>
        </div>
    </li>
    <?php endforeach; ?>
</ul >
