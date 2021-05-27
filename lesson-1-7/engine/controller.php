<?php

function prepareVariables($page, $action)
{
    $params['count'] = basketCount();
    $params['name'] = get_user();
    $params['auth'] = isAuth();

    switch ($page) {
        case 'index':

            break;

        case 'api':

            if ($action == 'buy') {
                addBasket($_GET['id']);
                echo json_encode(['count' => basketCount()]);
                die();
            }
            if ($action == 'delete') {
                deleteBasket($_GET['id']);
                echo json_encode(['count' => basketCount()]);
                die();
            }
            break;

        case 'login':
            $login = $_POST['login'];
            $pass = $_POST['pass'];
            if (auth($login, $pass)) {
                if (isset($_POST['save'])) {
                    $hash = uniqid(rand(), true);
                    $id = mysqli_real_escape_string(getDb(), strip_tags(stripslashes($_SESSION['id'])));
                    $sql = "UPDATE users SET hash = '{$hash}' WHERE id = {$id}";
                    $result = mysqli_query(getDb(), $sql);
                    setcookie("hash", $hash, time() + 3600, "/");
                }
                header("Location: /");
                die();
            } else {
                die("Не верный логин пароль");
            }

        case 'buy':
            //Купить
            break;

        case 'logout':
            setcookie("hash", "", time()-1, "/");
            session_destroy();
            session_regenerate_id();
            header("Location: /");
            die();

        case 'catalog':
            $params['catalog'] = getCatalog();
            break;

        case 'basket':
            $params['basket'] = getbasket();
            break;

        case 'news':
            $params['news'] = getNews();
            break;

        case 'newsone':
            $id = (int)$_GET['id'];
            $params['news'] = getOneNews($id);
            break;

        case 'feedback':
            doFeedbackAction($action);

            $params['feedback'] = getAllFeedback();
            break;
    }

    return $params;
}
