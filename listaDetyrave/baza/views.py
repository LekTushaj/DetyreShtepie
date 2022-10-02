from django.shortcuts import render, redirect
from django.views.generic.list import ListView
from django.views.generic.detail import DetailView
from django.views.generic.edit import CreateView, UpdateView, DeleteView, FormView


from django.contrib.auth.forms import UserCreationForm 
from django.contrib.auth import login

from .models import Detyra
from django.urls import reverse_lazy

from django.contrib.auth.views import LoginView

from django.contrib.auth.mixins import LoginRequiredMixin

class CustomLoginView(LoginView):
    template_name = 'baza/login.html'
    fields = '__all__'
    redirect_authenticated_user = True

    def get_success_url(self):
        return reverse_lazy('detyrat')

class FaqjaRegjistrimit(FormView):
    template_name = 'baza/regjistrohu.html'
    form_class = UserCreationForm
    redirect_authenticated_user = True
    success_url = reverse_lazy('detyrat')

    def form_valid(self, form):
        user = form.save()
        if user is not None:
            login(self.request, user)
        return super(FaqjaRegjistrimit, self).form_valid(form)

    def get(self, *args, **kwargs):
        if self.request.user.is_authenticated:
            return redirect('detyrat')
        return super(FaqjaRegjistrimit, self).get(*args, **kwargs)

class ListaDetyres(LoginRequiredMixin, ListView):
    model = Detyra 
    context_object_name = 'detyrat'

    def get_context_data(self, **kwargs):
        context = super().get_context_data(**kwargs)
        context['detyrat'] = context['detyrat'].filter(user=self.request.user)
        context['count'] = context['detyrat'].filter(kryer=False).count()

        search_input = self.request.GET.get('search-area') or ''
        if search_input:
            context['detyrat'] = context['detyrat'].filter(titulli__startswith=search_input)
        
        context['search_input'] = search_input
        return context

class Detajet_e_Detyres(LoginRequiredMixin, DetailView):
    model = Detyra
    context_object_name = 'detyra'
    template_name = 'baza/detajet.html'

class KrijoDetyren(LoginRequiredMixin, CreateView):
    model = Detyra
    fields = ['titulli','pershkrimi','kryer']
    success_url = reverse_lazy('detyrat')

    def form_valid(self, form):
        form.instance.user = self.request.user
        return super(KrijoDetyren, self).form_valid(form)

class NdryshoDetyren(LoginRequiredMixin, UpdateView):
    model = Detyra
    fields = ['titulli','pershkrimi','kryer']
    success_url = reverse_lazy('detyrat')

class AnuloDetyren(LoginRequiredMixin, DeleteView):
    model = Detyra
    context_object_name = 'detyra'
    success_url = reverse_lazy('detyrat')






    

    



