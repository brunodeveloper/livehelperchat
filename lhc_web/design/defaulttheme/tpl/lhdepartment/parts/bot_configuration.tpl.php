<div class="form-group">
    <label>Bot</label>
    <?php echo erLhcoreClassRenderHelper::renderCombobox( array (
        'input_name'     => 'bot_id',
        'optional_field' => erTranslationClassLhTranslation::getInstance()->getTranslation('chat/lists/search_panel','Select bot'),
        'selected_id'    => isset($departament->bot_configuration_array['bot_id']) ? $departament->bot_configuration_array['bot_id'] : 0,
        'css_class'      => 'form-control',
        'display_name'   => 'name',
        'list_function'  => 'erLhcoreClassModelGenericBotBot::getList'
    )); ?>
</div>
