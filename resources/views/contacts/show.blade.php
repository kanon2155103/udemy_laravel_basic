<x-app-layout>
	<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
			{{ $contact->id }}. {{ $contact->title}}
    </h2>
  </x-slot>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-12 text-gray-900 dark:text-gray-100">
					<section class="text-gray-600 body-font relative">
						<div class="container px-5 mx-auto">
							<div class="lg:w-1/2 md:w-2/3 mx-auto">
								<div class="flex flex-wrap -m-2">
								<div class="p-2 w-full">
										<div class="relative">
											<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $contact->name }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="title" class="leading-7 text-sm text-gray-600">Title</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $contact->title }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $contact->email }}
											</div>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="url" class="leading-7 text-sm text-gray-600">Website</label>
											@if ($contact->url)
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $contact->url }}
											</div>
											@endif
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label class="leading-7 text-sm text-gray-600">Gender</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $gender }}
											</div>
									</div>
									<div class="p-2 2-full">
										<label for="age" class="leading-7 text-sm text-gray-600">Age</label>
										<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
											{{ $age }}
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="inquiry" class="leading-7 text-sm text-gray-600">Contact of inquiry</label>
											<div class="w-full rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
												{{ $contact->inquiry }}
											</div>
										</div>
									</div>
									<form method="get" action="{{ route('contacts.edit', [ 'id' => $contact->id ]) }}">
										<div class="p-4 w-1/2">
											<button class="mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Edit</button>
										</div>
									</form>
									<form id="delete_{{ $contact->id }}" method="post" action="{{ route('contacts.destroy', [ 'id' => $contact->id ]) }}">
										@csrf
										<div class="p-4 w-1/2">
											<a href="#" data-id="{{ $contact->id }}" onclick="deletePost(this)" class="mx-auto text-white bg-pink-500 border-0 py-2 px-8 hover:bg-pink-600 rounded text-lg">Delete</a>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<script>
		function deletePost(e) {
			'use strict'
			if (confirm('Are you sure you want to delete your inquiry?')) {
				document.getElementById('delete_' + e.dataset.id).submit()
			}
		}
	</script>
</x-app-layout>
