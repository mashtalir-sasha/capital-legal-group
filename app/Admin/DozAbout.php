<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\DozAbout;

AdminSection::registerModel(DozAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('updated_at')->setLabel('Дата зміни')
        ]);
        return $display;
    });

    $model->disableCreating();
    $model->disableDeleting();

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()->addColumn(function () {
                return [
                    AdminDisplay::tabbed([
                        'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('title', 'Заголовок')->required()->setRows('2'),
                            AdminFormElement::ckeditor('text1', 'Текст 1')->required(),
                            AdminFormElement::ckeditor('text2', 'Текст 2')->required(),
                            
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows('2'),
                            AdminFormElement::ckeditor('text1RU', 'Текст 1')->required(),
                            AdminFormElement::ckeditor('text2RU', 'Текст 2')->required(),
                        ]),
                    ]),
                ];
            }, 8)->addColumn(function () {
                return [
                    AdminFormElement::image('image', 'Картинка')->required(),
                ];
            }, 4), 
        ]);

        $form->addBody([
            AdminDisplay::tabbed([
                'Українська ' => new \SleepingOwl\Admin\Form\FormElements([
                    AdminFormElement::columns()->addColumn(function () {
                        return [
                            AdminFormElement::html('<label>Терміни отримання</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::text('term_title')->required(),
                            AdminFormElement::textarea('term_text')->required(),
                        ];
                    })
                    ->addColumn(function () {
                        return [
                            AdminFormElement::html('<label>Вартість послуг</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::text('price_title')->required(),
                            AdminFormElement::textarea('price_text')->required(),
                        ];
                    })
                    ->addColumn(function () {
                        return [
                            AdminFormElement::html('<label>Необхідні документи</label>'),
                            AdminFormElement::html('<label>Від іноземця:</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('docs1', [
                                AdminFormElement::textarea('item')->setRows('2')
                            ]),
                            AdminFormElement::html('<label>Від роботодавця:</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('docs2', [
                                AdminFormElement::textarea('item')->setRows('2')
                            ]),
                            AdminFormElement::textarea('docs_note', 'Нотатка'),
                        ];
                    }),
                ]),
                'Русский ' => new \SleepingOwl\Admin\Form\FormElements([
                    AdminFormElement::columns()->addColumn(function () {
                        return [
                            AdminFormElement::html('<label>Сроки получения</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::text('term_titleRU')->required(),
                            AdminFormElement::textarea('term_textRU')->required(),
                        ];
                    })
                    ->addColumn(function () {
                        return [
                            AdminFormElement::html('<label>Стоимость услуг</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::text('price_titleRU')->required(),
                            AdminFormElement::textarea('price_textRU')->required(),
                        ];
                    })
                    ->addColumn(function () {
                        return [
                            AdminFormElement::html('<label>Необходимые документы</label>'),
                            AdminFormElement::html('<label>От иностранца:</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('docs1', [
                                AdminFormElement::textarea('itemRU')->setRows('2')
                            ]),
                            AdminFormElement::html('<label>От работодателя:</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('docs2', [
                                AdminFormElement::textarea('itemRU')->setRows('2')
                            ]),
                            AdminFormElement::textarea('docs_noteRU', 'Примечание'),
                        ];
                    }),
                ]),
            ]),
        ]);

        return $form;
    });
});