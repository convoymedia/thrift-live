<?php
    if (have_rows('blocks')) {
        while (have_rows('blocks')) {
            the_row();
            echo "<!-- " . get_row_layout() . " -->";
            include "content_blocks/" . get_row_layout() . ".php";
        }
    }
?>