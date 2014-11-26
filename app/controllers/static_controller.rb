class StaticController < ApplicationController
  
  def home
    @page = {:title => 'Welcome Home', :head_title => 'Home'}
  end
  
  def password
    @page = {:title => 'Change ReFresh Password', :head_title => 'Change Password'}
  end
  
  def iphone
    @page = {:title => 'Configure iPhone', :head_title => 'Configure iPhone'}
  end
  
  def applemail
    @page = {:title => 'Configure Apple Mail', :head_title => 'Configure Apple Mail'}
  end
  
end