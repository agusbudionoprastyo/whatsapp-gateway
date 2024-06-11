                               <li class="my-4">
                                   <select class="form-control select2" id="device_idd" name="device_id">
                                       <option data-icon="bi bi-whatsapp" value="">Selected Devices</option>
                                       @foreach ($numbers as $device)
                                           <option data-icon="bi {{ $device->icon_class }}" value="{{ $device->id }}">{{ $device->body }} ({{ $device->status }})</option>
                                       @endforeach
                                   </select>
                               </li>

                               <script>
                                   //  on select device
                                   $('#device_idd').on('change', function() {
                                       var device = $(this).val();
                                       $.ajax({
                                           url: "{{ route('home.setSessionSelectedDevice') }}",
                                           type: "POST",
                                           data: {
                                               _token: "{{ csrf_token() }}",
                                               device: device
                                           },
                                           success: function(data) { // reload page
                                               if (data.error) {
                                                   toastr.error(data.msg);
                                                   // reload in 1 second
                                                   setTimeout(function() {
                                                       location.reload();
                                                   }, 1000);
                                               } else {
                                                   toastr.success(data.msg);
                                                   // reload in 1 second
                                                   setTimeout(function() {
                                                       location.reload();
                                                   }, 1000);
                                               }
                                           }
                                       });
                                   });
                               </script>
