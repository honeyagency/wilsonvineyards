<?php
function prepareHomepageFields()
{
    $header = array(
        'title_one' => get_field('field_59d267420d741'),
        'title_two' => get_field('field_59d2674d0d742'),
    );
    $contactImageId = get_field('field_59d267ee0d74b');
    $contactImage   = new TimberImage($contactImageId);
    $contact        = array(
        'title' => get_field('field_59d267940d744'),
        'text'  => get_field('field_59d267980d745'),
        'form'  => get_field('field_59d267a00d746'),
        'image' => $contactImage,
    );
    $aboutImageId = get_field('field_59d267d70d74a');
    $aboutImage   = new TimberImage($aboutImageId);
    $about        = array(
        'title' => get_field('field_59d267b40d748'),
        'text'  => get_field('field_59d267ba0d749'),
        'image' => $aboutImage,
    );

    $home = array(
        'header'  => $header,
        'contact' => $contact,
        'about'   => $about,
    );
    return $home;
}

function prepareFooterFields()
{
    $footer = array(
        'contact_one' => get_field('field_59d26ca8dbe3a', 10),
        'contact_two' => get_field('field_59d26ccfdbe3b', 10),
        'footer'      => get_field('field_59d26dc98b50e', 10),
    );
    return $footer;
}
