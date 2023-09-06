<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\House;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project');
    }

    public function detail($id)
    {
        $folder = "";
        $description = "";
        $house = new House;
        switch ($id) {
            case 'บ้านตัวอย่าง Minimal':
                $folder = "img/house";
                $house->description = "โครงการบ้านเดี่ยว 2 ชั้นหลังใหญ่ บนทำเลใจกลางเชียงใหม่ ที่ออกแบบให้ทุกครอบครัวได้ใกล้ชิดธรรมชาติ รวมไปถึงการดีไซน์บ้านให้มีกระจกรับแสงขนาดใหญ่ เพื่อ Take View ภายนอกได้จากการนั่งอยู่ภายในบ้าน และออกแบบสำหรับผู้อยู่อาศัยในทุกช่วงวัย โดยเราคำนึงถึงครอบครัวขนาดใหญ่";
                $house->bed_room = 1;
                $house->bath_room = 1;
                $house->living_room = 1;
                $house->kitchen_room = 1;
                $house->area = 174;
                $house->car_park = true;
                $house->pool_villa = 1;
                $house->blueprint = "img/house/002/002/3D/LINE_ALBUM_แบบภูเก็ต_๒๓๐๗๑๒_3.jpg";
            break;
            case 'บ้านตัวอย่าง Luxury':
                $folder = "img/house";
                $house->description = "โครงการบ้านเดี่ยว 2 ชั้นหลังใหญ่ บนทำเลใจกลางเชียงใหม่ ที่ออกแบบให้ทุกครอบครัวได้ใกล้ชิดธรรมชาติ รวมไปถึงการดีไซน์บ้านให้มีกระจกรับแสงขนาดใหญ่ เพื่อ Take View ภายนอกได้จากการนั่งอยู่ภายในบ้าน และออกแบบสำหรับผู้อยู่อาศัยในทุกช่วงวัย โดยเราคำนึงถึงครอบครัวขนาดใหญ่";
                $house->bed_room = 3;
                $house->bath_room = 2;
                $house->living_room = 1;
                $house->kitchen_room = 1;
                $house->area = 396;
                $house->car_park = true;
                $house->pool_villa = 1;
                $house->blueprint = "img/house/002/002/3D/LINE_ALBUM_แบบภูเก็ต_๒๓๐๗๑๒_3.jpg";
            break;
            case 'ภาพและ 3D ภัสสรหาด (ปึกเตียน)':
                $house->description = "โครงการบ้านเดี่ยว 2 ชั้นหลังใหญ่ บนทำเลใจกลางเชียงใหม่ ที่ออกแบบให้ทุกครอบครัวได้ใกล้ชิดธรรมชาติ รวมไปถึงการดีไซน์บ้านให้มีกระจกรับแสงขนาดใหญ่ เพื่อ Take View ภายนอกได้จากการนั่งอยู่ภายในบ้าน และออกแบบสำหรับผู้อยู่อาศัยในทุกช่วงวัย โดยเราคำนึงถึงครอบครัวขนาดใหญ่";
                $folder = "img/house/001/001/3D";
                $house->bed_room = 2;
                $house->bath_room = 2;
                $house->living_room = 1;
                $house->kitchen_room = 1;
                $house->area = 396;
                $house->car_park = true;
                $house->pool_villa = 1;
                $house->blueprint = "img/house/001/001/3D/LINE_ALBUM_แบบตัวอย่าง_๒๓๐๗๑๒_1.jpg";
                break;
            case 'ภาพและ 3D ภัสสรหาด (ภูเก็ตป่าคลอก)':
                $folder = "img/house/002/002/3D";
                $house->description = "โครงการบ้านเดี่ยว 2 ชั้นหลังใหญ่ บนทำเลใจกลางเชียงใหม่ ที่ออกแบบให้ทุกครอบครัวได้ใกล้ชิดธรรมชาติ รวมไปถึงการดีไซน์บ้านให้มีกระจกรับแสงขนาดใหญ่ เพื่อ Take View ภายนอกได้จากการนั่งอยู่ภายในบ้าน และออกแบบสำหรับผู้อยู่อาศัยในทุกช่วงวัย โดยเราคำนึงถึงครอบครัวขนาดใหญ่";
                $folder = "img/house/001/001/3D";
                $house->bed_room = 2;
                $house->bath_room = 2;
                $house->living_room = 1;
                $house->kitchen_room = 1;
                $house->area = 396;
                $house->car_park = true;
                $house->pool_villa = 1;
                $house->blueprint = "img/house/002/002/3D/LINE_ALBUM_แบบภูเก็ต_๒๓๐๗๑๒_3.jpg";
                break;
        }

        return view('project_detail',compact('folder','id','house'));
    }
}
