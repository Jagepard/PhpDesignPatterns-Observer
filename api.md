## Table of contents
- [Behavioral\Observer\EventInterface](#behavioral_observer_eventinterface)
- [Behavioral\Observer\FootballEvent](#behavioral_observer_footballevent)
- [Behavioral\Observer\FootballObserver](#behavioral_observer_footballobserver)
- [Behavioral\Observer\FootballSubject](#behavioral_observer_footballsubject)
- [Behavioral\Observer\NameTrait](#behavioral_observer_nametrait)
- [Behavioral\Observer\ObserverInterface](#behavioral_observer_observerinterface)
- [Behavioral\Observer\SubjectInterface](#behavioral_observer_subjectinterface)
<hr>

<a id="behavioral_observer_eventinterface"></a>

### Class: Behavioral\Observer\EventInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getName</strong>(): string</em><br>|


<a id="behavioral_observer_footballevent"></a>

### Class: Behavioral\Observer\FootballEvent
##### implements [Behavioral\Observer\EventInterface](#behavioral_observer_eventinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает наименование|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает наименование|


<a id="behavioral_observer_footballobserver"></a>

### Class: Behavioral\Observer\FootballObserver
##### implements [Behavioral\Observer\ObserverInterface](#behavioral_observer_observerinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает наименование|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает наименование|


<a id="behavioral_observer_footballsubject"></a>

### Class: Behavioral\Observer\FootballSubject
##### implements [Behavioral\Observer\SubjectInterface](#behavioral_observer_subjectinterface)
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>attachObserver</strong>( Behavioral\Observer\ObserverInterface $observer ): void</em><br>Adds an observer<br>Добавляет наблюдателя|
|public|<em><strong>detachObserver</strong>( string $name ): void</em><br>Removes an observer<br>Убирает наблюдателя|
|public|<em><strong>notifyObservers</strong>( Behavioral\Observer\EventInterface $event ): void</em><br>Notifies all observers of an event<br>Уведомляет всех наблюдателей о событии|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает наименование|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает наименование|


<a id="behavioral_observer_nametrait"></a>

### Class: Behavioral\Observer\NameTrait
| Visibility | Function |
|:-----------|:---------|
|public|<em><strong>__construct</strong>( string $name )</em><br>Sets the name<br>Устанавливает наименование|
|public|<em><strong>getName</strong>(): string</em><br>Gets a name<br>Получает наименование|


<a id="behavioral_observer_observerinterface"></a>

### Class: Behavioral\Observer\ObserverInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>getName</strong>(): string</em><br>|


<a id="behavioral_observer_subjectinterface"></a>

### Class: Behavioral\Observer\SubjectInterface
| Visibility | Function |
|:-----------|:---------|
|abstract public|<em><strong>attachObserver</strong>( Behavioral\Observer\ObserverInterface $observer ): void</em><br>|
|abstract public|<em><strong>detachObserver</strong>( string $observerName ): void</em><br>|
|abstract public|<em><strong>notifyObservers</strong>( Behavioral\Observer\EventInterface $event ): void</em><br>|
<hr>

###### created with [Rudra-Documentation-Collector](#https://github.com/Jagepard/Rudra-Documentation-Collector)
