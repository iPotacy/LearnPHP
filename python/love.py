import numpy as np
import matplotlib.pyplot as plt
import matplotlib.animation as animation

def draw_heart(ax):
    t = np.linspace(0, 2*np.pi, 100)
    x = 16*np.sin(t)**3
    y = 13*np.cos(t) - 5*np.cos(2*t) - 2*np.cos(3*t) - np.cos(4*t)
    ax.plot(x, y, color='red')

def update(frame):
    ax.clear()
    draw_heart(ax)
    x_offset = np.sin(frame/10)*5
    y_offset = np.cos(frame/10)*5
    ax.set_xlim(-20+x_offset, 20+x_offset)
    ax.set_ylim(-20+y_offset, 20+y_offset)
    ax.set_aspect('equal')

fig, ax = plt.subplots()
ax.set_xlim(-20, 20)
ax.set_ylim(-20, 20)
ax.set_aspect('equal')
ax.axis('off')

ani = animation.FuncAnimation(fig, update, frames=np.arange(0, 200), interval=50)

plt.show()
