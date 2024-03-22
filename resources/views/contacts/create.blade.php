<x-app-layout>
	<div class="py-12">
		<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
			<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
				<div class="p-12 text-gray-900 dark:text-gray-100">
					@if ($errors->any())
						<div class="alert alert-danger">
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<section class="text-gray-600 body-font relative">
						<form method="post" action="{{ route('contacts.store') }}">
							@csrf
						<div class="container px-5 mx-auto">
							<div class="flex flex-col text-center w-full mb-6">
								<h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
							</div>
							<div class="lg:w-1/2 md:w-2/3 mx-auto">
								<div class="flex flex-wrap -m-2">
								<div class="p-2 w-full">
										<div class="relative">
											<label for="name" class="leading-7 text-sm text-gray-600">Name</label>
											<input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="title" class="leading-7 text-sm text-gray-600">Title</label>
											<input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="email" class="leading-7 text-sm text-gray-600">Email</label>
											<input type="email" value="{{ old('email') }}" id="email" name="email" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="url" class="leading-7 text-sm text-gray-600">Website</label>
											<input type="url" id="url" name="url" value="{{ old('url') }}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label class="leading-7 text-sm text-gray-600">Gender</label>
											<br>
											<input type="radio" name="gender" value="0" {{ old('gender') === '0' ? 'checked' : '' }}>Male
											<input type="radio" name="gender" value="1" {{ old('gender') === '1' ? 'checked' : '' }}>Female
									</div>
									<div class="p-2 2-full">
										<label for="age" class="leading-7 text-sm text-gray-600">Age</label>
										<br>
										<select name="age" id="">
											<option value="">please select</option>
											<option value="1" {{ old('age') === '1' ? 'selected' : '' }}>under 20</option>
											<option value="2" {{ old('age') === '2' ? 'selected' : '' }}>20 to 29</option>
											<option value="3" {{ old('age') === '3' ? 'selected' : '' }}>30 to 39</option>
											<option value="4" {{ old('age') === '4' ? 'selected' : '' }}>40 to 49</option>
											<option value="5" {{ old('age') === '5' ? 'selected' : '' }}>50 to 59</option>
											<option value="6" {{ old('age') === '6' ? 'selected' : '' }}>60 and over</option>
										</select>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<label for="inquiry" class="leading-7 text-sm text-gray-600">Contact of inquiry</label>
											<textarea id="inquiry" name="inquiry" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{ old('inquiry') }}</textarea>
										</div>
									</div>
									<div class="p-2 w-full">
										<div class="relative">
											<input type="checkbox" id="caution" name="caution">Check the caution.
										</div>
									</div>
									<div class="p-4 w-full">
										<button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Submit</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					</section>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>
