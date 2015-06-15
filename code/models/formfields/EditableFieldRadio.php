<?php

/**
 * EditableFieldRadio is an object representing radio buttons field created by CMS admin
 *
 * @author silverstripe/userforms
 * @author Mohamed Alsharaf <mohamed.alsharaf@gmail.com>
 * @method EditableFieldOption Options()
 * @property string $Name
 * @property string $Title
 */
class EditableFieldRadio extends EditableFieldMultipleOption {
	private static $singular_name = 'Radio field';
	private static $plural_name = 'Radio fields';

	protected function initFormField() {
		$optionSet = $this->Options();
		$options = [];

		if ($optionSet) {
			foreach ($optionSet as $option) {
				$options[$option->EscapedTitle] = $option->Title;
			}
		}

		return new OptionsetField($this->Name, $this->Title, $options);
	}

}
