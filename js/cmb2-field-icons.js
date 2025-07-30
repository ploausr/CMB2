/**
 * CMB2 Field Icons
 * Adiciona interações e animações aos ícones dos campos
 */
(function($) {
    'use strict';

    var CMB2FieldIcons = {
        init: function() {
            this.initTooltips();
            this.initRepeatingFields();
        },

        /**
         * Inicializa os tooltips personalizados
         */
        initTooltips: function() {
            var self = this;

            // Remove handlers antigos
            $(document).off('.cmb2icons');

            // Adiciona os novos handlers
            $(document).on('mouseenter.cmb2icons', '.cmb2-field-icon', function() {
                var $icon = $(this);
                var title = $icon.attr('title');

                if (!title) return;

                // Remove o título para evitar o tooltip nativo
                $icon.data('title', title).removeAttr('title');

                // Cria e adiciona o tooltip
                var $tooltip = $('<div class="cmb2-field-icon-tooltip">' + title + '</div>');
                $('body').append($tooltip);

                // Posiciona o tooltip
                var iconPos = $icon.offset();
                
                $tooltip.css({
                    top: iconPos.top + ($icon.outerHeight() / 2),
                    left: iconPos.left + ($icon.outerWidth() / 2)
                }).addClass('cmb2-field-icon-tooltip-visible');
            });

            $(document).on('mouseleave.cmb2icons', '.cmb2-field-icon', function() {
                var $icon = $(this);
                
                // Restaura o título
                var title = $icon.data('title');
                if (title) {
                    $icon.attr('title', title);
                }

                // Remove o tooltip
                $('.cmb2-field-icon-tooltip').remove();
            });
        },

        /**
         * Inicializa o suporte para campos repetíveis
         */
        initRepeatingFields: function() {
            var self = this;

            // Eventos do CMB2 para grupos repetíveis
            $(document).on('cmb2_add_row cmb2_remove_row', function() {
                self.initTooltips();
            });

            // Eventos dos botões de adicionar/remover
            $(document).on('click', '.cmb-add-row-button, .cmb-remove-row-button', function() {
                setTimeout(function() {
                    self.initTooltips();
                }, 10);
            });
        }
    };

    // Inicializa quando o documento estiver pronto
    $(document).ready(function() {
        CMB2FieldIcons.init();
    });

})(jQuery); 