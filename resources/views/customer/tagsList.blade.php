@foreach ($tags as $tag)
		<div
				class="fi-badge min-w[theme(spacing.5)] flex items-center justify-center gap-x-1 rounded-md px-1.5 py-0.5 text-xs font-medium tracking-tight ring-1 ring-inset"
				style="background: {{ $tag->color }}; display: inline-block;">
				<span class="grid">
						<span class="truncate">
								{{ $tag->name }}
						</span>
				</span>
		</div>
@endforeach
