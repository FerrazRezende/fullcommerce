<?php

namespace App\Enum;

enum ProductCategory: string
{
    case DISPOSITIVOS_ELETRONICOS = 'Dispositivos Eletronicos';
    case NOTEBOOKS_LAPTOS = 'Notebooks e Laptops';
    case ACESSORIOS_COMPUTADOR = 'Acessorios de computador';
    case SMARTPHONES = 'Smartphones';
    case HEADPHONES = 'Headphones';
    case ACESSORIOS_CELULAR = 'Acessorios de celular';
    case VIDEOGAMES = 'Videogames';
    case CAMERA_FOTOGRAFIA = 'Cameras e fotografia';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }
}
