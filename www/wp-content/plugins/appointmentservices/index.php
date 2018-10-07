<?php
/*
Plugin Name: Add Appointment Services
*/
function appointmentservices_shortcodes_init()
{
    function appointmentservice_shortcode($atts = [], $content = null)
    {
        $content .= '<script>var oAtts=' . json_encode($atts) . '</script>';
        $content .= file_get_contents(__DIR__ . "/appointmentServices.html");
        return $content;
    }
    add_shortcode('appointmentservice-plugin', 'appointmentservice_shortcode');
}
add_action('init', 'appointmentservices_shortcodes_init');