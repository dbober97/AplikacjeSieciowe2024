<?php

use core\App;
use core\Utils;

//App::getRouter()->setDefaultRoute('hello'); #default action
App::getRouter()->setDefaultRoute('blog'); #default action
App::getRouter()->setLoginRoute('logowanie'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('logowanie', 'LoginCtrl');
Utils::addRoute('rejestracja', 'LoginCtrl');
Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('hello', 'HelloCtrl');
Utils::addRoute('autorzy', 'AutorzyCtrl');

Utils::addRoute('blog', 'BlogCtrl');
Utils::addRoute('glowna', 'GlownaCtrl');
Utils::addRoute('matematyka', 'MatematykaCtrl');
Utils::addRoute('fizyka', 'FizykaCtrl');
Utils::addRoute('informatyka', 'InformatykaCtrl');
Utils::addRoute('kontakt', 'KontaktCtrl');

Utils::addRoute('panelAdmin', 'PanelAdminCtrl', ["admin"]);
Utils::addRoute('panelAutor', 'PanelAutorCtrl', ["autor"]);
Utils::addRoute('panelCzytelnik', 'PanelCzytelnikCtrl', ["czytelnik"]);
Utils::addRoute('panelModerator', 'PanelModeratorCtrl', ["moderator"]);
//Utils::addRoute('panelZalogowanego', 'PanelZalogowanegoCtrl', ["administrator", "moderator", "autor", "czytelnik"]);
//Utils::addRoute('action_name', 'controller_class_name');