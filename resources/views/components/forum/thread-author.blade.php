@props(['author'])

<div class="bg-skin-card rounded-lg shadow">
    <div class="w-full flex items-center justify-between pt-4 px-4 space-x-3">
        <img class="w-8 h-8 object-cover bg-skin-card-gray rounded-full shrink-0" src="{{ $author->profile_photo_url }}" alt="{{ $author->name }}">
        <div class="flex-1 truncate">
            <div class="flex items-center space-x-3">
                <a href="{{ route('profile', $author->username) }}" class="text-skin-inverted text-sm font-medium truncate">{{ $author->name }}</a>
            </div>
            <p class="text-skin-base text-sm truncate">{{ '@'. $author->username }}</p>
        </div>
    </div>
    <div class="space-y-4 p-4">
        @if($author->bio)
            <p class="text-skin-base text-sm leading-5">{{ $author->bio }}</p>
        @endif
        @if($author->location)
            <div>
                <dt class="text-[12px] font-medium text-skin-muted uppercase tracking-wider">
                    {{ __('Localisation') }}
                </dt>
                <dd class="text-skin-base">
                    {{ $author->location }}
                </dd>
            </div>
        @endif
        <div>
            <dt class="text-[12px] font-medium text-skin-muted uppercase tracking-wider">
                {{ __('Inscrit') }}
            </dt>
            <dd class="text-skin-base">
                <time-ago time="{{ $user->created_at->getTimestamp() }}"/>
            </dd>
        </div>
    </div>
</div>
