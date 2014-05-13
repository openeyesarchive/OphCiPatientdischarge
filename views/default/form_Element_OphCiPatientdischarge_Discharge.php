<?php
/**
 * OpenEyes
 *
 * (C) Moorfields Eye Hospital NHS Foundation Trust, 2008-2011
 * (C) OpenEyes Foundation, 2011-2013
 * This file is part of OpenEyes.
 * OpenEyes is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * OpenEyes is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License along with OpenEyes in a file titled COPYING. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package OpenEyes
 * @link http://www.openeyes.org.uk
 * @author OpenEyes <info@openeyes.org.uk>
 * @copyright Copyright (c) 2008-2011, Moorfields Eye Hospital NHS Foundation Trust
 * @copyright Copyright (c) 2011-2013, OpenEyes Foundation
 * @license http://www.gnu.org/licenses/gpl-3.0.html The GNU General Public License V3.0
 */
?>

<section class="element <?php echo $element->elementType->class_name?>"
				 data-element-type-id="<?php echo $element->elementType->id?>"
				 data-element-type-class="<?php echo $element->elementType->class_name?>"
				 data-element-type-name="<?php echo $element->elementType->name?>"
				 data-element-display-order="<?php echo $element->elementType->display_order?>">
	<header class="element-header">
		<h3 class="element-title"><?php echo $element->elementType->name; ?></h3>
	</header>

	<div class="element-fields">
		<?php echo $form->radioButtons($element, 'translator_present_id', CHtml::listData(OphCiPatientdischarge_Discharge_TranslatorPresent::model()->findAll(array('order'=>'display_order asc')),'id','name'), null, false, false, false, false, array('class' => 'linked-fields', 'data-linked-fields'=>'name_of_translator', 'data-linked-values'=>'Yes'), array('label' => 3, 'field' => 4))?>
		<?php echo $form->textField($element, 'name_of_translator', array('hide' => !$element->translator_present || $element->translator_present->name != 'Yes'), array(), array('label' => 3, 'field' => 4))?>
		<?php echo $form->checkBox($element, 'take_home_medications', array('text-align'=>'right'), array('label' => 3, 'field' => 5))?>
		<?php echo $form->checkBox($element, 'postop_education', array('text-align'=>'right'), array('label' => 3, 'field' => 4))?>
		<?php echo $form->textArea($element, 'additional_patient_instructions', array(), false, array(), array('label' => 3, 'field' => 4))?>
		<?php echo $form->dropDownList($element, 'patient_handoff_to_id', CHtml::listData(Site::model()->findAll(array('order'=> 'name asc')),'id','name'),array('empty'=>'- Please select -'),false,array('label'=>3,'field'=>4))?>
		<div id="div_Element_OphCiPatientdischarge_Discharge_patient_emergency_contact_id" class="row field-row">
			<div class="large-3 column">
				<label for="Element_OphCiPatientdischarge_Discharge_patient_emergency_contact_id">
					<?php echo $element->getAttributeLabel('patient_emergency_contact_id')?>:
				</label>
			</div>
			<div class="large-4 column end">
				<?php echo $form->dropDownList($element, 'patient_emergency_contact_id', CHtml::listData(User::model()->findAll(array('order'=> 'first_name asc, last_name asc')),'id','fullName'),array('nowrapper' => true, 'empty'=>'- Please select -'))?>
			</div>
		</div>
		<div id="div_Element_OphCiPatientdischarge_Discharge_patient_followup_contact_id" class="row field-row">
			<div class="large-3 column">
				<label for="Element_OphCiPatientdischarge_Discharge_patient_followup_contact_id">
					<?php echo $element->getAttributeLabel('patient_followup_contact_id')?>:
				</label>
			</div>
			<div class="large-9 column end">
				<div class="row field-row">
					<div class="large-5 column">
						<?php echo $form->dropDownList($element, 'patient_followup_contact_id', CHtml::listData(User::model()->findAll(array('order'=> 'first_name asc, last_name asc')),'id','fullName'),array('nowrapper'=>true,'empty'=>'- Please select -'),false,array('label'=>3,'field'=>4))?>
					</div>
					<div class="large-2 column">
						<?php echo $form->datePicker($element, 'patient_followup_datetime', array(), array('nowrapper' => true, 'null' => 'true'), array('label' => 3, 'field' => 4))?>
					</div>
					<div class="large-2 column end">
						<div class="field-row">
							<div class="large-10 column">
								<?php echo $form->textField($element, 'patient_followup_datetime_time', array('nowrapper' => true))?>
							</div>
							<div class="large-2 column collapse end">
								<span class="field-info">Time</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="div_Element_OphCiPatientdischarge_Discharge_surgical_case_review_contact_id" class="row field-row">
			<div class="large-3 column">
				<label for="Element_OphCiPatientdischarge_Discharge_surgical_case_review_contact_id">
					<?php echo $element->getAttributeLabel('surgical_case_review_contact_id')?>:
				</label>
			</div>
			<div class="large-9 column end">
				<div class="row field-row">
					<div class="large-5 column">
						<?php echo $form->dropDownList($element, 'surgical_case_review_contact_id', CHtml::listData(User::model()->findAll(array('order'=> 'first_name asc, last_name asc')),'id','fullName'),array('nowrapper'=>true,'empty'=>'- Please select -'),false,array('label'=>3,'field'=>4))?>
					</div>
					<div class="large-2 column">
						<?php echo $form->datePicker($element, 'surgical_case_review_datetime', array(), array('nowrapper' => true, 'null'=>true))?>
					</div>
					<div class="large-2 column end">
						<div class="field-row">
							<div class="large-10 column">
								<?php echo $form->textField($element, 'surgical_case_review_datetime_time', array('nowrapper' => true))?>
							</div>
							<div class="large-2 column collapse end">
								<span class="field-info">Time</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
