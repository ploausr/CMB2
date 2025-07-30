<?php
/**
 * CMB2 Switch field type
 *
 * @since  1.0.0
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */
class CMB2_Type_Switch extends CMB2_Type_Checkbox {

    public function render($args = array()) {
        $defaults = array(
            'type'  => 'checkbox',
            'class' => 'cmb2-switch-input',
            'name'  => $this->_name(),
            'id'    => $this->_id(),
            'value' => 'on',
            'desc'  => '',
        );

        $meta_value = $this->field->escaped_value();
        $is_checked = !empty($meta_value);

        if ($is_checked) {
            $defaults['checked'] = 'checked';
        }

        $args = $this->parse_args('switch', $defaults);

        add_action('admin_footer', array(__CLASS__, 'add_styles'));

        $input = sprintf(
            '<input%s/>',
            $this->concat_attrs($args)
        );

        $label = sprintf(
            '<label class="cmb2-switch" for="%s">%s<span class="cmb2-switch-slider"></span></label>',
            $this->_id(),
            $input
        );

        return $this->rendered($label);
    }

    /**
     * Adiciona os estilos CSS necessários
     */
    public static function add_styles() {
        ?>
        <style type="text/css">
            .cmb2-switch {
                position: relative;
                display: inline-block;
                width: 40px;
                height: 20px;
                margin-right: 10px;
            }
            .cmb2-switch input {
                opacity: 0;
                width: 0;
                height: 0;
                margin: 0;
            }
            .cmb2-switch-slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                transition: .3s;
                border-radius: 20px;
            }
            .cmb2-switch-slider:before {
                position: absolute;
                content: "";
                height: 16px;
                width: 16px;
                left: 2px;
                bottom: 2px;
                background-color: white;
                transition: .3s;
                border-radius: 50%;
            }
            .cmb2-switch input:checked + .cmb2-switch-slider {
                background-color: #2271b1;
            }
            .cmb2-switch input:focus + .cmb2-switch-slider {
                box-shadow: 0 0 1px #2271b1;
            }
            .cmb2-switch input:checked + .cmb2-switch-slider:before {
                transform: translateX(20px);
            }
            /* Ajustes para o layout padrão do CMB2 */
            .cmb-type-switch .cmb-td {
                display: flex;
                align-items: center;
            }
            /* Estilo para o estado desabilitado */
            .cmb2-switch input:disabled + .cmb2-switch-slider {
                opacity: 0.5;
                cursor: not-allowed;
            }
            /* Estilo hover */
            .cmb2-switch-slider:hover {
                background-color: #b4b9be;
            }
            .cmb2-switch input:checked + .cmb2-switch-slider:hover {
                background-color: #135e96;
            }
        </style>
        <?php
    }
}
