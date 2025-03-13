import { Button } from '@/components/ui/button'
import { useAppearance } from '@/hooks/use-appearance'
import { Moon, Sun } from 'lucide-react'

export default function AppearanceToggleTab() {
  const { appearance, updateAppearance } = useAppearance()

  return (
    <Button
      variant="ghost"
      size="icon"
      onClick={() => updateAppearance(appearance === 'light' ? 'dark' : 'light')}
      className="h-9 w-9 rounded-md border"
    >
      <Sun className="h-4 w-4 scale-100 rotate-0 transition-all dark:scale-0 dark:-rotate-90" />
      <Moon className="absolute h-4 w-4 scale-0 rotate-90 transition-transform dark:scale-100 dark:rotate-0" />
      <span className="sr-only">Toggle theme</span>
    </Button>
  )
}
