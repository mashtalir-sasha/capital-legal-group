<?php

use SleepingOwl\Admin\Model\ModelConfiguration;
use App\Models\IpnAbout;

AdminSection::registerModel(IpnAbout::class, function (ModelConfiguration $model) {

    $model->setTitle('Про нас');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::text('subtitle')->setLabel('Підзаголовок'),
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
                            AdminFormElement::textarea('subtitle', 'Підзаголовок')->required()->setRows('2'),
                            AdminFormElement::textarea('item1', 'Пункт списку 1')->required()->setRows('3'),
                            AdminFormElement::textarea('item2', 'Пункт списку 2')->required()->setRows('3'),
                            AdminFormElement::textarea('item3', 'Пункт списку 3')->setRows('3'),
                            AdminFormElement::textarea('item4', 'Пункт списку 4')->setRows('3'),
                            AdminFormElement::textarea('item5', 'Пункт списку 5')->setRows('3'),
                            AdminFormElement::textarea('item6', 'Пункт списку 6')->setRows('3'),
                            AdminFormElement::textarea('item7', 'Пункт списку 7')->setRows('3'),
                            AdminFormElement::textarea('item8', 'Пункт списку 8')->setRows('3'),
                        ]),
                        'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                            AdminFormElement::textarea('titleRU', 'Заголовок')->required()->setRows('2'),
                            AdminFormElement::textarea('subtitleRU', 'Подзаголовок')->required()->setRows('2'),
                            AdminFormElement::textarea('item1RU', 'Пункт списка 1')->required()->setRows('3'),
                            AdminFormElement::textarea('item2RU', 'Пункт списка 2')->required()->setRows('3'),
                            AdminFormElement::textarea('item3RU', 'Пункт списка 3')->setRows('3'),
                            AdminFormElement::textarea('item4RU', 'Пункт списка 4')->setRows('3'),
                            AdminFormElement::textarea('item5RU', 'Пункт списка 5')->setRows('3'),
                            AdminFormElement::textarea('item6RU', 'Пункт списка 6')->setRows('3'),
                            AdminFormElement::textarea('item7RU', 'Пункт списка 7')->setRows('3'),
                            AdminFormElement::textarea('item8RU', 'Пункт списка 8')->setRows('3'),
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
                            AdminFormElement::html('<label>Необхідні документи</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('docs', [
                                AdminFormElement::textarea('item')->setRows('2')
                            ]),
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
                            AdminFormElement::html('<label>Необходимые документы</label> <span class="form-element-required">*</span>'),
                            AdminFormElement::hasManyLocal('docs', [
                                AdminFormElement::textarea('itemRU')->setRows('2')
                            ]),
                        ];
                    }),
                ]),
            ]),
        ]);

        return $form;
    });
});