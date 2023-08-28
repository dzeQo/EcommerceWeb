@extends('master')

@section('title' , 't9edda Leya')
    
@section('content')
<section id="contact">
  
    <h1 class="section-header">Contact</h1>
    
    <div class="contact-wrapper">
    
    <!-- Left contact page --> 
      
      <form action="{{url('/send_message')}}" id="contact-form" class="form-horizontal" method="POST" role="form">
         
      
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text" class="form-control" id="name" placeholder="NAME" name="name" value="" required>
          </div>
        </div>
  
        <div class="form-group">
          <div class="col-sm-12">
            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
          </div>
        </div>
  
        <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" required></textarea>
        
        <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
          <div class="alt-send-button">
            <i class="fa fa-paper-plane"></i><span class="send-text">SEND</span>
          </div>
        
        </button>
        
      </form>
      
    <!-- Left contact page --> 
      
        <div class="direct-contact-container">
  
          <ul class="contact-list">
            <li class="list-item"><i class="fas fa-map-marker"></i><span class="contact-text place">Marrakech, Morocco</span></i></li>
            
            <li class="list-item"><i class="fas fa-phone"></i><span class="contact-text phone"><a href="tel:1-212-555-5555" title="Give me a call">(212) XXX-2368</a></span></i></li>
            
            <li class="list-item"><i class="fas fa-envelope"></i><span class="contact-text gmail"><a href="mailto:#" title="Send me an email">tqedaleya@gmail.com</a></span></i></li>
            
          </ul>
  
          <hr>
          <ul class="social-media-list">
            
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fab fa-codepen" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fab fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li><a href="#" target="_blank" class="contact-icon">
              <i class="fab fa-instagram" aria-hidden="true"></i></a>
            </li>       
          </ul>
          <hr>
  
          <div class="copyright">&copy; ALL OF THE RIGHTS RESERVED</div>
  
        </div>
      
    </div>
    
  </section>  
    
    
@endsection