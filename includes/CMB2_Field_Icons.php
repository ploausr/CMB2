<?php
/**
 * CMB2 Field Icons
 *
 * @category  WordPress_Plugin
 * @package   CMB2
 * @author    CMB2 team
 * @license   GPL-2.0+
 * @link      https://cmb2.io
 */

class CMB2_Field_Icons {

    /**
     * Mapeamento de tipos de campo para ícones e descrições do Dashicons
     * @var array
     */
    protected static $type_icons = array(
        'text' => array(
            'icon' => 'dashicons-heading',
            'desc' => 'Este campo é utilizado para textos curtos como títulos, nomes ou qualquer informação breve'
        ),
        'text_small' => array(
            'icon' => 'dashicons-editor-textcolor',
            'desc' => 'Campo de texto reduzido, ideal para números de referência, códigos ou informações curtas'
        ),
        'text_medium' => array(
            'icon' => 'dashicons-editor-textcolor',
            'desc' => 'Campo de texto de tamanho médio, perfeito para subtítulos ou descrições curtas'
        ),
        'text_email' => array(
            'icon' => 'dashicons-email',
            'desc' => 'Este campo valida automaticamente se o e-mail digitado está no formato correto'
        ),
        'text_url' => array(
            'icon' => 'dashicons-admin-links',
            'desc' => 'Use este campo para links e URLs, ele verifica automaticamente se a URL é válida'
        ),
        'text_money' => array(
            'icon' => 'dashicons-money',
            'desc' => 'Campo formatado para valores monetários, com validação automática do formato'
        ),
        'text_time' => array(
            'icon' => 'dashicons-clock',
            'desc' => 'Permite selecionar horários facilmente com um seletor de tempo integrado'
        ),
        'text_date' => array(
            'icon' => 'dashicons-calendar',
            'desc' => 'Oferece um calendário para selecionar datas de forma visual e intuitiva'
        ),
        'text_datetime_timestamp' => array(
            'icon' => 'dashicons-calendar-alt',
            'desc' => 'Combina data e hora em um único campo, ideal para agendamentos e eventos'
        ),
        'text_datetime_timestamp_timezone' => array(
            'icon' => 'dashicons-calendar-alt',
            'desc' => 'Campo completo com data, hora e fuso horário, perfeito para eventos internacionais'
        ),
        'textarea' => array(
            'icon' => 'dashicons-editor-paragraph',
            'desc' => 'Use para textos longos como descrições detalhadas, biografias ou conteúdo em geral'
        ),
        'textarea_small' => array(
            'icon' => 'dashicons-editor-paragraph',
            'desc' => 'Campo de texto multilinha compacto, ideal para observações ou notas curtas'
        ),
        'textarea_code' => array(
            'icon' => 'dashicons-editor-code',
            'desc' => 'Perfeito para códigos ou scripts, mantém a formatação e espaçamento'
        ),
        'select' => array(
            'icon' => 'dashicons-menu',
            'desc' => 'Apresenta uma lista de opções onde o usuário pode selecionar uma única alternativa'
        ),
        'radio' => array(
            'icon' => 'dashicons-marker',
            'desc' => 'Opções em formato de botões de rádio, ideal quando todas as opções precisam estar visíveis'
        ),
        'radio_inline' => array(
            'icon' => 'dashicons-marker',
            'desc' => 'Similar ao campo radio, mas as opções são exibidas horizontalmente para economizar espaço'
        ),
        'checkbox' => array(
            'icon' => 'dashicons-yes',
            'desc' => 'Campo de marcação única, perfeito para opções do tipo sim/não ou aceito/não aceito'
        ),
        'multicheck' => array(
            'icon' => 'dashicons-list-view',
            'desc' => 'Permite selecionar múltiplas opções de uma lista de alternativas'
        ),
        'multicheck_inline' => array(
            'icon' => 'dashicons-list-view',
            'desc' => 'Opções de múltipla escolha organizadas horizontalmente para melhor visualização'
        ),
        'taxonomy_select' => array(
            'icon' => 'dashicons-category',
            'desc' => 'Lista suspensa com termos de uma taxonomia, como categorias ou tags'
        ),
        'taxonomy_radio' => array(
            'icon' => 'dashicons-category',
            'desc' => 'Exibe termos de taxonomia em formato de botões de rádio para seleção única'
        ),
        'taxonomy_radio_inline' => array(
            'icon' => 'dashicons-category',
            'desc' => 'Termos de taxonomia em botões de rádio alinhados horizontalmente'
        ),
        'taxonomy_multicheck' => array(
            'icon' => 'dashicons-category',
            'desc' => 'Permite selecionar múltiplos termos de uma taxonomia com caixas de seleção'
        ),
        'taxonomy_multicheck_inline' => array(
            'icon' => 'dashicons-category',
            'desc' => 'Seleção múltipla de termos de taxonomia em layout horizontal'
        ),
        'taxonomy_radio_hierarchical' => array(
            'icon' => 'dashicons-networking',
            'desc' => 'Exibe termos de taxonomia em estrutura hierárquica, mantendo relação entre pai e filho'
        ),
        'taxonomy_multicheck_hierarchical' => array(
            'icon' => 'dashicons-networking',
            'desc' => 'Permite selecionar múltiplos termos mantendo a hierarquia entre eles'
        ),
        'file' => array(
            'icon' => 'dashicons-paperclip',
            'desc' => 'Permite fazer upload de um arquivo com visualização prévia quando for imagem'
        ),
        'file_list' => array(
            'icon' => 'dashicons-index-card',
            'desc' => 'Crie uma galeria de arquivos com possibilidade de reordenação por arrastar e soltar'
        ),
        'oembed' => array(
            'icon' => 'dashicons-video-alt3',
            'desc' => 'Incorpore conteúdo de sites como YouTube, Vimeo, Twitter apenas colando a URL'
        ),
        'wysiwyg' => array(
            'icon' => 'dashicons-editor-justify',
            'desc' => 'Editor de texto completo com formatação, similar ao editor de posts do WordPress'
        ),
        'colorpicker' => array(
            'icon' => 'dashicons-art',
            'desc' => 'Selecione cores usando um seletor visual com suporte a valores hexadecimais'
        ),
        'title' => array(
            'icon' => 'dashicons-heading',
            'desc' => 'Campo usado para criar seções e organizar outros campos em grupos lógicos'
        ),
        'group' => array(
            'icon' => 'dashicons-grid-view',
            'desc' => 'Agrupe vários campos que podem ser repetidos como um conjunto, ideal para galerias ou listas'
        ),
        'switch' => array(
            'icon' => 'dashicons-yes',
            'desc' => 'Este campo é utilizado para ativar ou desativar funcionalidades, similar a um interruptor'
        ),
        'hidden' => array(
            'icon' => 'dashicons-hidden',
            'desc' => 'Campo invisível na interface mas que armazena valores importantes para o sistema'
        ),
        'password' => array(
            'icon' => 'dashicons-lock',
            'desc' => 'Campo seguro para senhas, mascara os caracteres digitados com pontos'
        ),
        'select_timezone' => array(
            'icon' => 'dashicons-clock',
            'desc' => 'Permite selecionar um fuso horário de uma lista completa de zonas temporais'
        )
    );

    /**
     * Inicializa os hooks necessários
     */
    public static function init() {
        // Registra os scripts e estilos
        add_action('admin_init', array(__CLASS__, 'register_assets'));
        
        // Adiciona o callback para renderização dos ícones
        add_filter('cmb2_field_arguments', array(__CLASS__, 'add_field_icon_callback'), 20, 2);
        
        // Adiciona os estilos
        add_action('admin_head', array(__CLASS__, 'add_styles'));
    }

    /**
     * Registra os assets necessários
     */
    public static function register_assets() {
        // Registra o script
        wp_register_script(
            'cmb2-field-icons',
            CMB2_Utils::url('js/cmb2-field-icons.js'),
            array('jquery'),
            CMB2_VERSION,
            true
        );

        // Adiciona como dependência do CMB2
        add_filter('cmb2_script_dependencies', array(__CLASS__, 'add_script_dependency'));
    }

    /**
     * Adiciona o script como dependência do CMB2
     */
    public static function add_script_dependency($dependencies) {
        wp_enqueue_script('cmb2-field-icons');
        $dependencies['cmb2-field-icons'] = 'cmb2-field-icons';
        return $dependencies;
    }

    /**
     * Adiciona o callback para renderização dos ícones
     */
    public static function add_field_icon_callback($args, $field) {
        // Adiciona nosso callback antes do campo
        if (!isset($args['before_field'])) {
            $args['before_field'] = array(__CLASS__, 'render_field_icon');
        } else {
            // Se já existe um callback, vamos criar uma função anônima que chama ambos
            $original_callback = $args['before_field'];
            $args['before_field'] = function($args, $field) use ($original_callback) {
                self::render_field_icon($args, $field);
                if (is_callable($original_callback)) {
                    call_user_func($original_callback, $args, $field);
                }
            };
        }

        return $args;
    }

    /**
     * Renderiza o ícone do campo
     */
    public static function render_field_icon($args, $field) {
        $type = $field->type();
        if (isset(self::$type_icons[$type])) {
            $icon_data = self::$type_icons[$type];
            printf(
                '<span class="cmb2-field-icon dashicons %s" title="%s"></span>',
                esc_attr($icon_data['icon']),
                esc_attr($icon_data['desc'])
            );
        }
    }

    /**
     * Adiciona os estilos CSS necessários
     */
    public static function add_styles() {
        ?>
        <style type="text/css">
            .cmb2-field-icon {
                margin-top: 4px;
                margin-right: .75rem;
                display: inline-flex;
                align-items: center;
                justify-content: center;
                width: 20px;
                height: 20px;
                background: #f0f0f1;
                border-radius: 4px;
                color: #666;
                font-size: 14px;
                cursor: help;
                transition: all 0.3s ease;
                box-shadow: 0 1px 2px rgba(0,0,0,0.05);
                position: relative;
            }
            .cmb2-field-icon:hover {
                background: #2271b1;
                color: #fff;
            }

            .cmb2-field-icon-tooltip {
                position: absolute;
                z-index: 999999;
                background: #1e1e1e;
                color: #fff;
                padding: 6px 8px;
                border-radius: 3px;
                font-size: 12px;
                line-height: 1.4;
                text-align: center;
                pointer-events: none;
                max-width: 200px;
                opacity: 0;
                visibility: hidden;
                transition: opacity 0.15s ease, visibility 0.15s ease;
                box-shadow: 0 1px 3px rgba(0,0,0,0.2);
                transform: translate(-50%, -100%);
                margin-top: -16px;
                left: 50%;
            }

            .cmb2-field-icon-tooltip:after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -4px;
                transform: translateX(-50%);
                border-width: 4px 4px 0 4px;
                border-style: solid;
                border-color: #1e1e1e transparent transparent transparent;
            }

            .cmb2-field-icon-tooltip-visible {
                opacity: 1;
                visibility: visible;
            }
        </style>
        <?php
    }
}
