<?php

namespace App\Providers;

use App\Providers\StopService;
use App\Models\Drektor;
use App\Models\Brend;
use App\Models\Yil;
use App\Models\Oy;
use App\Models\Kun;
use App\Models\Tavar;
use App\Models\Tavarturi;
use App\Models\Sarftavar;
use App\Models\Yuk;
use App\Models\Xisob;
use App\Models\Chiqim;
use App\Models\Yuridikchiqim;
use App\Models\Ishlabchiqarilgan;
use App\Models\ishchi;
use App\Models\ishchimehnat;
use App\Models\Jamichiqishtavar;
use App\Models\Kirimtavar;
use App\Models\Jamiyuk;
use App\Models\Jamisarf;
use App\Models\Jismoniyjami;
use App\Models\Jamiyuridik;
use App\Models\Jamikirimtavar;
use App\Models\Umumiykirimtavar;
use App\Models\Umumiychiqimtavar;
use App\Models\Yilumumiychiqimtavar;
use App\Models\Opshiumumiychiqimtavar;
use App\Models\Yilumumiykirimtavar;
use App\Models\Opshiumumiykitimtavar;
use App\Models\Yuridikopshiqarz;
use App\Models\Yuridikoyqarz;
use App\Models\Yuridikyilqarz;
use App\Models\Jismoniyyilqarz;
use App\Models\Jismoniyoyqarz;
use App\Models\Jismoniyopshiqarz;
use App\Models\Oysarftavar;
use App\Models\Yilliksariftavar;
use App\Models\Opshisarftavar;
use App\Models\Oyishchiyuk;
use App\Models\Karzinayuk;
use App\Models\Oylikmasala;
use App\Models\Umumiyoylikmasala;
use App\Models\Sotilishkun;
use App\Models\Sotilishoy;
use App\Models\Sotilishyil;
use App\Models\Sotilishopshi;


class OopService extends StopService
{
    public function __construct(Sotilishopshi $sotilishopshi, Sotilishyil $sotilishyil, Sotilishoy $sotilishoy, Sotilishkun $sotilishkun, Umumiyoylikmasala $umumiyoylikmasala, Oylikmasala $oylikmasala, Karzinayuk $karzinayuk, Opshisarftavar $opshisarftavar, Oyishchiyuk $oyishchiyuk, Yilliksariftavar $yilliksariftavar, Oysarftavar $oysarftavar, Jismoniyopshiqarz $jismoniyopshiqarz, Jismoniyoyqarz $jismoniyoyqarz, Jismoniyyilqarz $jismoniyyilqarz, Yuridikyilqarz $yuridikyilqarz, Yuridikoyqarz $yuridikoyqarz, Yuridikopshiqarz $yuridikopshiqarz, Opshiumumiykitimtavar $opshiumumiykitimtavar, Yilumumiykirimtavar $yilumumiykirimtavar, Opshiumumiychiqimtavar $opshiumumiychiqimtavar, Yilumumiychiqimtavar $yilumumiychiqimtavar, Umumiychiqimtavar $umumiychiqimtavar, Umumiykirimtavar $umumiykirimtavar, Jamikirimtavar $jamikirimtavar, Jamichiqishtavar $jamichiqishtavar,  Jamiyuridik $jamiyuridik, Jismoniyjami $jismoniyjami, Jamisarf $jamisarf, Drektor $drektor, Brend $bren, Yil $yil, Oy $oy, Kun $kun, Jamiyuk $jamiyuk, Sarftavar $sarftavar, Yuk $yuk, Tavar $tavar, Tavarturi $tavarturi, Xisob $xisob, Chiqim $chiqim, Yuridikchiqim $yuridikchiqim, Ishlabchiqarilgan $ishlabchiqarilgan, ishchi $ishchi, ishchimehnat $ishchimehnat, Kirimtavar $kirimtavar)
    {
        $this->sotilishopshi=$sotilishopshi;
        $this->sotilishyil=$sotilishyil;
        $this->sotilishoy=$sotilishoy;
        $this->sotilishkun=$sotilishkun;
        $this->umumiyoylikmasala=$umumiyoylikmasala;
        $this->oylikmasala=$oylikmasala;
        $this->karzinayuk=$karzinayuk;
        $this->opshisarftavar=$opshisarftavar;
        $this->oyishchiyuk=$oyishchiyuk;
        $this->yilliksariftavar=$yilliksariftavar;
        $this->oysarftavar=$oysarftavar;
        $this->jismoniyopshiqarz=$jismoniyopshiqarz;
        $this->jismoniyoyqarz=$jismoniyoyqarz;
        $this->jismoniyyilqarz=$jismoniyyilqarz;
        $this->yuridikyilqarz=$yuridikyilqarz;
        $this->yuridikoyqarz=$yuridikoyqarz;
        $this->yuridikopshiqarz=$yuridikopshiqarz;
        $this->opshiumumiykitimtavar=$opshiumumiykitimtavar;
        $this->yilumumiykirimtavar=$yilumumiykirimtavar;
        $this->opshiumumiychiqimtavar=$opshiumumiychiqimtavar;
        $this->yilumumiychiqimtavar=$yilumumiychiqimtavar;
        $this->umumiychiqimtavar=$umumiychiqimtavar;
        $this->umumiykirimtavar=$umumiykirimtavar;
        $this->jamik=$jamikirimtavar;
        $this->jamichiqishtavar=$jamichiqishtavar;
        $this->jamiyuridik=$jamiyuridik;
        $this->jismoniyjami=$jismoniyjami;
        $this->jamisarf=$jamisarf;
        $this->drektor=$drektor;
        $this->brend=$bren;
        $this->yil=$yil;
        $this->oy=$oy;
        $this->kun=$kun;
        $this->tavar=$tavar;
        $this->jamiyuk=$jamiyuk;
        $this->tavarturi=$tavarturi;
        $this->sarftavar=$sarftavar;
        $this->yuk=$yuk; 
        $this->xisob=$xisob;
        $this->chiqim=$chiqim;
        $this->yuridikchiqim=$yuridikchiqim;
        $this->ishlabchiqarilgan=$ishlabchiqarilgan;
        $this->ishchi=$ishchi;
        $this->ishchimehnat=$ishchimehnat;
        $this->kirimtavar=$kirimtavar;
        
    }
}