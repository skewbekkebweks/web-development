<?php

namespace Class\Classes\Mvc;

class UserController
{
    public function usersPage(Request $request)
    {
        return '<ul>
                    <li>' . $request->getParam('item1') . '</li>
                    <li>' . $request->getParam('item2', 'abc') . '</li>
                    <li>' . $request->getParam('item3', 'xyz') . '</li>
                </ul>';
    }

    public function usersPhotosPage(Request $request)
    {
        $c = file_get_contents(__DIR__ . '/../../db/photos.json');
        $photos = json_decode($c, true);
        $id = $request->getParam('user_id');
        $result = $id ? [] : $photos;
        foreach ($photos as $photo) {
            if ($photo['user_id'] == $id) {
                $result[] = $photo;
            }
        }
//        if (!empty($_SERVER['HTTP_AJAX']) && strtolower($_SERVER['HTTP_AJAX']) == 'true') {
            return $result;
//        }
        if (count($result) > 0) {
            $html = '<ul>';
            foreach ($result as $i => $item) {
                $html .= <<<HTML
<li><a href="{$item['url']}">Photo $i</a></li>
HTML;
            }
            $html .= '</ul>';
            return $html;
        } else {
            return "photos not found";
        }
    }
    public function usersFilesPage() {
        if (true) return '401';

    }
}