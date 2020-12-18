<?php

class Product
{
    public $danhsach;
    public $tensanpham;
    public $danhmuc;
    public $soluong;
    public $giasanpham;
    public $motasanpham;
    public $ngaythemsanpham;
    public $anhmotasanpham;

    /**
     * @return mixed
     */
    public function getDanhsach()
    {
        return $this->danhsach;
    }

    /**
     * @param mixed $danhsach
     */
    public function setDanhsach($danhsach)
    {
        $this->danhsach = $danhsach;
    }

    /**
     * @return mixed
     */
    public function getTensanpham()
    {
        return $this->tensanpham;
    }

    /**
     * @param mixed $tensanpham
     */
    public function setTensanpham($tensanpham)
    {
        $this->tensanpham = $tensanpham;
    }

    /**
     * @return mixed
     */
    public function getDanhmuc()
    {
        return $this->danhmuc;
    }

    /**
     * @param mixed $danhmuc
     */
    public function setDanhmuc($danhmuc)
    {
        $this->danhmuc = $danhmuc;
    }

    /**
     * @return mixed
     */
    public function getSoluong()
    {
        return $this->soluong;
    }

    /**
     * @param mixed $soluong
     */
    public function setSoluong($soluong)
    {
        $this->soluong = $soluong;
    }

    /**
     * @return mixed
     */
    public function getGiasanpham()
    {
        return $this->giasanpham;
    }

    /**
     * @param mixed $giasanpham
     */
    public function setGiasanpham($giasanpham)
    {
        $this->giasanpham = $giasanpham;
    }

    /**
     * @return mixed
     */
    public function getMotasanpham()
    {
        return $this->motasanpham;
    }

    /**
     * @param mixed $motasanpham
     */
    public function setMotasanpham($motasanpham)
    {
        $this->motasanpham = $motasanpham;
    }

    /**
     * @return mixed
     */
    public function getNgaythemsanpham()
    {
        return $this->ngaythemsanpham;
    }

    /**
     * @param mixed $ngaythemsanpham
     */
    public function setNgaythemsanpham($ngaythemsanpham)
    {
        $this->ngaythemsanpham = $ngaythemsanpham;
    }

    /**
     * @return mixed
     */
    public function getAnhmotasanpham()
    {
        return $this->anhmotasanpham;
    }

    /**
     * @param mixed $anhmotasanpham
     */
    public function setAnhmotasanpham($anhmotasanpham)
    {
        $this->anhmotasanpham = $anhmotasanpham;
    }

public function them(){}
public function sua(){}
public function xoa(){}

}

?>