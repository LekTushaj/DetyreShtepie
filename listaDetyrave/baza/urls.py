from django.urls import path
from .views import ListaDetyres, Detajet_e_Detyres
from .views import KrijoDetyren, NdryshoDetyren, AnuloDetyren
from .views import CustomLoginView, FaqjaRegjistrimit
from django.contrib.auth.views import LogoutView


urlpatterns = [
    path('login/', CustomLoginView.as_view(), name="login"),
    path('logout/', LogoutView.as_view(next_page='login'), name="logout"),
    path('regjistrohu/', FaqjaRegjistrimit.as_view(), name='regjistrohu'),

    path('', ListaDetyres.as_view(), name='detyrat'),
    path('detyra/<int:pk>/', Detajet_e_Detyres.as_view(), name='detyra'),
    path('krijo-detyren/', KrijoDetyren.as_view(), name='krijo-detyren'),
    path('ndrysho-detyren/<int:pk>/', NdryshoDetyren.as_view(), name='ndrysho-detyren'),
    path('anulo-detyren/<int:pk>/', AnuloDetyren.as_view(), name='anulo-detyren'),
]



