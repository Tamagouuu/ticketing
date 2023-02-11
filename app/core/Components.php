<?php

class Components
{
    public static function deleteButton($url)
    {
        return '<form action="' . BASEURL . $url . '" method="POST" class="d-inline">
                    <button class="btn btn-danger btn-circle btn-sm my-1" onclick="return confirm(`Anda yakin ingin menghapus?`)" type="submit">
                    <i class="fas fa-trash"></i>
                    </button>
                </form>';
    }
    public static function editButton($url)
    {
        return '<a href="' . BASEURL . $url . '" class="btn btn-warning btn-circle btn-sm my-1">
                    <i class="fas fa-pencil-alt"></i>
                </a>';
    }
}
