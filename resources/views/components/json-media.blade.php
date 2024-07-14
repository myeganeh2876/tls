<!-- the json-media.blade.php -->
@php
    use GalleryJsonMedia\JsonMedia\Media;
    /** @var Media $media*/
    $media
@endphp
<figure class="" style="width: {{ $media->width }}px">
    <img class="object-cover w-full aspect-video" loading="lazy"
         src="{{ $media->getCropUrl(width: $media->width,height: $media->height) }}"
         alt="{{ $media->getCustomProperty('alt') }}"
         width="{{ $media->width }}"
         height="{{ $media->height }}"
    >
</figure>
