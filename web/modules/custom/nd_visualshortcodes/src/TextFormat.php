<?php
namespace Drupal\nd_visualshortcodes;
use Drupal\Core\Security\TrustedCallbackInterface;

class TextFormat implements TrustedCallbackInterface {

  public static function trustedCallbacks() {
    return ['preRender'];
  }

  //nd_visualshortcodes_pre_render_text_format
  public static function preRender($elements) {

    static $init = FALSE;
    if (!isset($elements['#format'])) {
      return $elements;
    }
    // print_r($element['format']['format']);
    if ($init === FALSE) {
      $config = \Drupal::config('nd_visualshortcodes.settings');
      $elements['#attached']['drupalSettings']['nd_visualshortcodes'] = [
        "autostart" => $config->get("autostart"),
        "formats" => $config->get("formats"),
        "confirm_delete" => $config->get("confirm_delete"),
        "html_default_format" => $config->get("html_default_format"),
      ];
      $elements['#attached']['library'][] = 'nd_visualshortcodes/shortcodes';
      $init = TRUE;
    }

    if (isset($elements['value'])) {
      if (!isset($elements['format'])) {
        return $elements;
      }
      if (isset($elements['summary']) && $elements['summary']['#type'] == 'textarea') {
        $elements['value'] = nd_visualshortcodes_load_field($elements['value'], $elements['format']['format'], TRUE, $elements['summary']['#id']);
        $elements['summary'] = nd_visualshortcodes_load_field($elements['summary'], $elements['format']['format'], FALSE);
      }
      else {
        $elements['value'] = nd_visualshortcodes_load_field($elements['value'], $elements['format']['format']);
      }
    }
    else {
      $elements = nd_visualshortcodes_load_field($elements, $elements['#format']);
    }
    return $elements;
  }

}
