<div class="col-md-3 hidden-sm hidden-xs">
	<div class="sb-02 nav_menu-17 okment"><h4 class="tt-sb-02">Giấy dán tường</h4>
		<div class="menu-dong-ho-trang-tri-container">
			<ul id="menu-dong-ho-trang-tri" class="menu">
				<?php
				$taxonomy = 'category_san-pham'; // Thay thế bằng tên thực tế của taxonomy
				$parent_term = 'giay-dan-tuong'; // Thay thế bằng slug của term cha bạn muốn lấy term con

				// Lấy ID của term cha
				$parent_term_id = get_term_by('slug', $parent_term, $taxonomy);

				if ($parent_term_id && !is_wp_error($parent_term_id)) {
					// Lấy danh sách các term con của term cha
					$child_terms = get_term_children($parent_term_id->term_id, $taxonomy);

					if (!empty($child_terms) && !is_wp_error($child_terms)) {
						foreach ($child_terms as $child_term_id) {
							$child_term = get_term($child_term_id, $taxonomy);
							$child_term_name = $child_term->name;
							$child_term_link = get_term_link($child_term);

							echo '<li id="menu-item-' . esc_attr($child_term_id) . '" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-' . esc_attr($child_term_id) . '"><a href="' . esc_url($child_term_link) . '">' . esc_html($child_term_name) . '</a></li>';
						}
					}
				}
				?>

			</ul>
		</div>
	</div>
    <div class="sb-02 nav_menu-24 okment"><h4 class="tt-sb-02">Tranh dán tường</h4>
        <div class="menu-giay-dan-tuong-container">
            <ul id="menu-giay-dan-tuong" class="menu">
                <?php
                $taxonomy = 'category_san-pham'; // Thay thế bằng tên thực tế của taxonomy
                $parent_term = 'tranh-dan-tuong'; // Thay thế bằng slug của term cha bạn muốn lấy term con

                // Lấy ID của term cha
                $parent_term_id = get_term_by('slug', $parent_term, $taxonomy);

                if ($parent_term_id && !is_wp_error($parent_term_id)) {
                    // Lấy danh sách các term con của term cha
                    $child_terms = get_term_children($parent_term_id->term_id, $taxonomy);

                    if (!empty($child_terms) && !is_wp_error($child_terms)) {
                        foreach ($child_terms as $child_term_id) {
                            $child_term = get_term($child_term_id, $taxonomy);
                            $child_term_name = $child_term->name;
                            $child_term_link = get_term_link($child_term);

                            echo '<li id="menu-item-' . esc_attr($child_term_id) . '" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-' . esc_attr($child_term_id) . '"><a href="' . esc_url($child_term_link) . '">' . esc_html($child_term_name) . '</a></li>';
                        }
                    }
                }
                ?>

            </ul>
        </div>
    </div>


</div>