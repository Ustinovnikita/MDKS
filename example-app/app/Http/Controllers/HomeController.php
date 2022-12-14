<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home', [
            'FilmOne' => 'Новый Человек-Паук(2012)',
            'descriptionone' => 'В детстве Питер Паркер был оставлен своими родителями, и поэтому воспитывался дядей и тётей. Шли годы, Питер был обычным примерным школьником, подвергался нападкам хулиганов и был влюблён в свою одноклассницу Гвен Стэйси, которая сама втайне отвечала ему взаимностью.',
            'FilmTwo' => 'Безуманый Макс(1979)',
            'descriptiontwo' => 'В недалёком будущем, после крупной катастрофы, поразившей нашу урбанистическую цивилизацию, вся жизнь сосредоточилась вдоль бесчисленных магистралей. Дорога стала способом существования. И дала многим возможность проявлять свои самые жестокие инстинкты. Банда байкеров на мощных мотоциклах, желая рассчитаться за своего убитого товарища, преследует молодого полицейского Макса. ',
            'FilmThree' => 'По Соображениям Совести(2016)',
            'descriptionthree' => 'Медик американской армии времён Второй мировой войны Дезмонд Досс, который служил во время битвы за Окинаву, отказывается убивать людей и становится первым идейным уклонистом в американской истории, удостоенным Медали Почёта.',
            'FilmFour' => 'Форест Гамп(1994)',
            'descriptionfour' => 'С самого малолетства парень страдал от заболевания ног, соседские мальчишки дразнили его, но в один прекрасный день Форрест открыл в себе невероятные способности к бегу. Подруга детства Дженни всегда его поддерживала и защищала, но вскоре дороги их разошлись.',
        ]);
    }
}