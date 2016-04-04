require 'sinatra'
require "sinatra/reloader" if development?

set :bind, '0.0.0.0'
set :port, ENV['PORT']

get '/' do
  "You are in home"
end
get '/:name' do
  "Hello #{params['name']}!"
end
